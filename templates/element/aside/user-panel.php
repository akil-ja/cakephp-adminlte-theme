<div class="user-panel">
    <div class="pull-left image">
        <?php echo $this->Html->image('default_profile_pic.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
    </div>
    <div class="pull-left info">
        <p>
						<?php
						$session = $this->getRequest()->getSession();
						if($session->read('user')){
							echo $session->read('user.first_name').' '.$session->read('user.last_name');

						}
						?>
				</p>
        
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>