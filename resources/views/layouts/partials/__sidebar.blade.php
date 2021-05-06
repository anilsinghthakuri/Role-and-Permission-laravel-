<div class="list-group">

    @can('student_details')
    <a href="#" class="list-group-item list-group-item-action ">Student Details</a>
    @endcan

    @can('student_create')
    <a href="#" class="list-group-item list-group-item-action ">Student create</a>
    @endcan

    @can('fee_collect')
    <a href="#" class="list-group-item list-group-item-action">Fee Collect</a>
    @endcan

    @can('fee_assign')
    <a href="#" class="list-group-item list-group-item-action ">Assign Fee</a>
    @endcan

    @can('book_save')
    <a href="#" class="list-group-item list-group-item-action ">Save Book</a>
    @endcan

    @can('book_issue')
    <a href="#" class="list-group-item list-group-item-action ">Issue & Return Book</a>
    @endcan

    @can('book_fine')
    <a href="#" class="list-group-item list-group-item-action ">Collect Book Fine</a>
    @endcan

    @can('exam_create')
    <a href="#" class="list-group-item list-group-item-action ">Create Exam</a>
    @endcan

    @can('exam_mark')
    <a href="#" class="list-group-item list-group-item-action ">Upload Marks</a>
    @endcan

    @can('leave_apply')
    <a href="#" class="list-group-item list-group-item-action ">Apply Leave</a>
    @endcan

</div>

