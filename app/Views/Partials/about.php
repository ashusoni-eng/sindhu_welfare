<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded ps-3 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute " src="/assets/img/logo.png" alt=""
                        style="object-fit: scale-down; width:20rem;" />
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <?php if($contact) : ?>
                <div>
                    <h2 class="mb-4 text-center">Our Dais Members</h2>
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($members as $member) : ?>
                            <tr>
                                <td><?= $i++ ?>.</td>
                                <td>Mr. <?= $member['name'] ?> <br class="hiddenOnDesktop">
                                    <small class="text-primary">
                                        (<?= ucwords($member['member_type']) ?>
                                    </small>)
                                </td>
                                <td><?= $member['mobile'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <div class="h-100">
                        <h1 class="display-6 mb-5">
                            <?= config('App')->siteName ?> — nurturing traditions with modern compassion.
                        </h1>
                        <p class="fs-5 text-primary mb-4">
                            We are devoted to uplifting society through spirituality, Sindhi cultural preservation, and
                            compassionate community service.
                        </p>
                        <p class="mb-4">
                            From religious celebrations to social support — we foster a space where Sindhi heritage
                            flourishes and
                            every soul feels at home.
                            <?= config('App')->siteName ?> is a humble effort to unite Sindhi hearts through satsang, seva,
                            and
                            sanskar.
                            More than just a welfare society, we are a spiritual family — honoring our roots, serving those
                            in need,
                            and passing forward the timeless values of Sindhi life
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($contact) : ?>
            <div class="h-100">
                <h1 class="display-6 mb-5">
                    <?= config('App')->siteName ?> — nurturing traditions with modern compassion.
                </h1>
                <p class="fs-5 text-primary mb-4">
                    We are devoted to uplifting society through spirituality, Sindhi cultural preservation, and
                    compassionate community service.
                </p>
                <p class="mb-4">
                    From religious celebrations to social support — we foster a space where Sindhi heritage flourishes and
                    every soul feels at home.
                    <?= config('App')->siteName ?> is a humble effort to unite Sindhi hearts through satsang, seva, and
                    sanskar.
                    More than just a welfare society, we are a spiritual family — honoring our roots, serving those in need,
                    and passing forward the timeless values of Sindhi life
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- About End -->
