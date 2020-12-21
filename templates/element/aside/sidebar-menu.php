<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="<?php echo $this->Url->build('/users/home'); ?>">
            <i class="fa fa-dashboard"></i> <span>Home</span>
        </a>
    </li>
    <?php if ($this->getRequest()->getSession()->read('user.is_staff') > 0 || $this->getRequest()->getSession()->read('user.is_faculty') > 0 || $this->getRequest()->getSession()->read('user.is_admin') == 1) { ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-apple"></i> <span>My Courses</span>
                <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
            </a>

            <ul class="treeview-menu">
                <li><a href="<?php echo $this->Url->build('/users/studentLists'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Students</a></li>
                <li><a href="<?php echo $this->Url->build([
                        'controller' => 'StudentAccommodations',
                        'action' => 'index',
                        'plugin' => null,
                        'prefix' => null,
                    ]); ?>"><i class="fa fa-arrow-circle-right"></i> Accommodations</a></li>
            </ul>
        </li>
    <?php } ?>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
        </a>
        <ul class="treeview-menu">
            <?php if ($this->getRequest()->getSession()->read('user.is_staff') > 0 || $this->getRequest()->getSession()->read('user.is_faculty') > 0 || $this->getRequest()->getSession()->read('user.is_admin') == 1) { ?>
                <li><a href="<?php echo $this->Url->build('/academic-misconducts/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Academic Misconduct</a></li>
                <li><a href="<?php echo $this->Url->build('/instructor-recommendations/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Instructor Recommendations</a></li>
                <li><a href="<?php echo $this->Url->build('/test-exam-printings/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Test/Exam Printing</a></li>
                <li><a href="<?php echo $this->Url->build('/faculty-communication-sheets/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Faculty Communication Sheet</a></li>
                <li><a href="<?php echo $this->Url->build('/textbook-orders/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Textbook Order</a></li>
                <li><a href="<?php echo $this->Url->build('/grade-changes/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Grade Changes</a></li>
            <?php } ?>
            <?php if ($this->getRequest()->getSession()->read('user.is_admin') == 1 || $this->getRequest()->getSession()->read('user.financial_arrangement_requests') == 1) { ?>
                <li><a href="<?php echo $this->Url->build('/student-financial-arrangement-requests'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Student Financial<br>Arrangement
                        Requests</a></li>
            <?php } elseif ($this->getRequest()->getSession()->read('user.is_student') > 0) {
                ?>
                <li><a href="<?php echo $this->Url->build('/student-financial-arrangement-requests/add'); ?>"><i
                            class="fa fa-arrow-circle-right"></i> Student Financial<br>Arrangement Request</a>
                </li>
            <?php } ?>
        </ul>

    </li>

    <?php if ($this->getRequest()->getSession()->read('user.is_staff') > 0 || $this->getRequest()->getSession()->read('user.is_faculty') > 0 || $this->getRequest()->getSession()->read('user.is_admin') == 1) { ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-lightbulb-o"></i>
                <span>Teaching Tips</span>
                <span class="pull-right-container">
        <span class="label label-primary pull-right">4</span>
      </span>
            </a>
        </li>
    <?php } ?>

    <li>
        <a href="#">
            <i class="fa fa-calendar"></i> <span>Events</span>
        </a>
    </li>


    <li>
        <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>News</span>
        </a>
    </li>


    <li>
        <a href="#">
            <i class="fa fa-bullhorn"></i> <span>Announcements</span>
        </a>
    </li>

</ul>
