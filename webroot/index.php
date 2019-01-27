<?php
/**
 * The Front Controller for handling every request
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       MIT License (https://opensource.org/licenses/mit-license.php)
 */

// Check platform requirements
require dirname(__DIR__) . '/config/requirements.php';
?>
<html>
</<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome to cakephp</h1>
<div class="row">
                    <div class="col-md-6">
                <?php echo $this->Form->create('User');?>
                <fieldset>
                    <legend><?php __('Add User'); ?></legend>
                    <div class="form-group has-feedback">
                                    <label>Username</label>
                                    <?php echo $this->Form->input('lastname',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                   </div>
                   <div class="form-group has-feedback">
                                    <label>firstname</label>
                                    <?php echo $this->Form->input('firstname',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                                    <label>Email</label>
                                    <?php echo $this->Form->input('email',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>organizer_pic</label>
                                    <?php echo $this->Form->input('organizer_pic',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                                    <label>description</label>
                                    <?php echo $this->Form->input('description',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>website</label>
                                    <?php echo $this->Form->input('website',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>company</label>
                                    <?php echo $this->Form->input('company',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>organization</label>
                                    <?php echo $this->Form->input('organization',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                                    <label>contact number</label>
                                    <?php echo $this->Form->input('contact_num',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                                    <label>username</label>
                                    <?php echo $this->Form->input('username',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>password</label>
                                    <?php echo $this->Form->input('password',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                                    <label>group id</label>
                                    <?php echo $this->Form->input('group_id',array('class'=>'form-control','label'=>false,'div'=>false));
                                    ?>
                                    <i class="icon-users form-control-feedback"></i>
                    </div>
                     <div class="form-group has-feedback">
                     <?php
                     echo $this->Form->button('Submit',array('class'=>'btn btn-success btn-xs','div'=>false),array('escape'=>false)
                            );
                     ?>
                     </div>
                </fieldset><?php echo $this->Form->end();?>
                </div>
                </div>
                
                
                <div class="footer">
	&copy; <?php print date("Y");?>
</div>
</body>
</html>


<!-- // // For built-in server
// if (php_sapi_name() === 'cli-server') {
//     $_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

//     $url = parse_url(urldecode($_SERVER['REQUEST_URI']));
//     $file = __DIR__ . $url['path'];
//     if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file)) {
//         return false;
//     }
// }
// require dirname(__DIR__) . '/vendor/autoload.php';

// use App\Application;
// use Cake\Http\Server;

// // Bind your application to the server.
// $server = new Server(new Application(dirname(__DIR__) . '/config'));

// // Run the request/response through the application and emit the response.
// $server->emit($server->run());-->

