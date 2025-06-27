<!-- Members Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Members</h1>
        </div>
        <div class="row g-4 table-responsive">

        <table class="table table-striped table-hover table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <th>SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (! empty($members)): ?>
                    <?php foreach ($members as $i => $member): ?>                    
                        <?php
                            $nameColorClass = $member['member_type'] != 'member' && $member['member_type'] != 'working committee' ? 'text-primary' : '';    
                            $post = $member['member_type'] != 'member' && $member['member_type'] != 'working committee' ? ucwords($member['member_type']) : '';
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td class="<?= $nameColorClass ?>"><?= $member['name'] ?><?= ! empty($post) ? ' (' . $post . ')' : '' ?></td>
                            <td><?= $member['office_name'] ?? '--' ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?= base_url('members/single/' . $member['id']) ?>">View</a>
                            </td>
                        </tr>                                                    
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>            
        </div>
    </div>
</div>
<!-- Members End -->
