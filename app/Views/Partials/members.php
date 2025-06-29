<!-- Members Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px">
            <h1 class="display-6 mb-5"><?= ucwords($title) ?></h1>
        </div>
        <div class="row g-4 table-responsive">

        <!-- <table class="table table-striped table-hover table-bordered" id="membersTable">
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
                          $nameColorClass = ($member['member_type'] == 'member') 
                            ? '' 
                            : (($member['member_type'] == 'working committee') ? 'textwc' : 'text-primary');                          

                            $post = $member['member_type'] == 'member'
                             ? ''
                              :  (($member['member_type'] == 'working committee') ? 'WC' : ucwords($member['member_type']));
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td class="fw-bold <?= $nameColorClass ?>">Mr. <?= $member['name'] ?><?= ! empty($post) ? ' (' . $post . ')' : '' ?></td>
                            <td class="fw-bold <?= $nameColorClass ?>"><?= $member['office_name'] ?? '--' ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?= base_url('members/single/' . $member['id']) ?>">View</a>
                            </td>
                        </tr>                                                    
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>             -->


            <?php if (!empty($members)): ?>
                <?php foreach ($members as $i => $member): ?>
                    <?= view('Partials/member_card', ['member' => $member]) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Members End -->
