<div class="d-flex justify-content-center container-fluid">
    <div class="col">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Task Lists</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">
 <?php foreach ($task as $val): ?>
    <li class="list-group-item">
        <div class="todo-indicator bg-warning"></div>
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading"><?php echo $val['Text'];?>
                </div>
                <div class="widget-subheading"><i><?php echo 'By '.$val['UserName'];?></i></div>
            </div>
                <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <i class="fa fa-check"></i></button> <button class="border-0 btn-transition btn btn-outline-danger"> <i class="fa fa-trash"></i> </button> </div>
            </div>
        </div>
    </li>
<?php endforeach; ?>                  
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
            <div class="d-block text-right card-footer"><button class="btn btn-primary">Add Task</button></div>
        </div>
    </div>
</div>