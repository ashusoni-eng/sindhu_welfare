<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class CsvImportController extends Controller
{
    public function index()
    {
        return view('Pages/csv_import');
    }

    public function import()
    {
        $file = $this->request->getFile('csv_file');

        // Validate if the file is uploaded
        if (! $file->isValid()) {
            return redirect()->back()->with('error', 'Invalid file upload.');
        }

        // Move the file to a temporary location
        $fileName      = $file->getRandomName() . '.' . $file->getExtension();
        $directoryPath = WRITEPATH . 'uploads/'; // Correct: Only the directory path
        $file->move($directoryPath, $fileName);  // Pass directory and filename separately

        // Open the file for reading
        if (($handle = fopen($directoryPath . $fileName, 'r')) !== false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('members'); // Replace with your table name

            // Read the CSV file row by row
            $header = ['name', 'dob', 'wife', 'date_of_marriage', 'father_name', 'residencial_address', 'office_name', 'blood_group', 'office_phone', 'residencial_phone', 'office_address', 'mobile', 'email', 'mother_name', 'qualification'];
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {

                // Prepare data for insertion
                $data                = array_combine($header, $row);
                $data['member_type'] = 'member';
                $data['status']      = 1;                   // Default value for status
                $data['created_at']  = date('Y-m-d H:i:s'); // Current timestamp
                $data['updated_at']  = date('Y-m-d H:i:s');

                // Insert into database
                $builder->insert($data);

            }

            fclose($handle);

            return redirect()->back()->with('success', 'Data imported successfully.');
        }

        return redirect()->back()->with('error', 'Failed to read the CSV file.');
    }
}
