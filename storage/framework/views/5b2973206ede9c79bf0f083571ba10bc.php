
<?php $__env->startSection('section'); ?>

<div class="main_section_style">
    <div class="heading_nav_bar"></div>

    <h1 class="text_align_center mb_3">
        Client Query
    </h1>
    <div class="table_data_styling">
        <table>
            <tr>
                <th>Mark</th>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Web Url</th>
                <th>Preffered Option</th>
                <th>Budget</th>
                <th>Goals</th>
                <th>FB Link</th>
                <th>Insta Link</th>
                <th>Service</th>
                <th>Requirement</th>
                <th>Existing Tool</th>
                <th>Form Type</th>
                <th>Language</th>
                <th>Created At</th>
                <th>Remarks</th>
            </tr>

            <?php $__currentLoopData = $QueryForms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <!-- ✅ Checkbox Form (Mark Query) -->
                <td class="text_align_center">
                    <input type="checkbox" class="mark-checkbox" data-id="<?php echo e($query->id); ?>">
                </td>

                <td class="text_align_center"><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($query->name); ?></td>
                <td><?php echo e($query->email); ?></td>
                <td><?php echo e($query->company_name); ?></td>
                <td><?php echo e($query->phone_number); ?></td>
                <td><?php echo e($query->your_msg); ?></td>
                <td><?php echo e($query->web_url); ?></td>
                <td><?php echo e($query->preffered_option); ?></td>
                <td><?php echo e($query->budget); ?></td>
                <td><?php echo e($query->goals); ?></td>
                <td><?php echo e($query->fb_link); ?></td>
                <td><?php echo e($query->insta_link); ?></td>
                <td><?php echo e($query->category); ?></td>
                <td><?php echo e($query->Requirement); ?></td>
                <td><?php echo e($query->existing_tool); ?></td>
                <td><?php echo e($query->form_type); ?></td>
                <td><?php echo e($query->language); ?></td>
                <td><?php echo e(date('M d, Y', strtotime($query->created_at))); ?></td>

                <!-- ✅ Remarks Form (Focus Out Auto Save) -->
                <td>
                    <textarea class="remarks-textarea" data-id="<?php echo e($query->id); ?>" rows="3" cols="50"><?php echo e($query->remarks); ?></textarea>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>

<!-- ✅ jQuery AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // ✅ 1. Checkbox Submission (Mark Query)
        $(".mark-checkbox").on("change", function () {
            let id = $(this).data("id");
            let status = $(this).is(":checked") ? 1 : 0;

            $.ajax({
                url: "<?php echo e(route('mark.query')); ?>",
                type: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    id: id,
                    status: status
                },
                success: function (response) {
                    console.log(response.message);
                }
            });
        });

        // ✅ 2. Remarks Submission (Focus Out Event)
        $(".remarks-textarea").on("blur", function () {
            let id = $(this).data("id");
            let remarks = $(this).val();

            $.ajax({
                url: "<?php echo e(route('submit.remarks')); ?>",
                type: "POST",
                data: {
                    _token: "<?php echo e(csrf_token()); ?>",
                    id: id,
                    remarks: remarks
                },
                success: function (response) {
                    console.log(response.message);
                }
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layout/frame', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\xampp\htdocs\itsoftexpert\resources\views/admin/client-query.blade.php ENDPATH**/ ?>