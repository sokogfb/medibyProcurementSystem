<div class="row">
    <div class="col-md-12" style="background: white;">
	    <?php $form=$this->beginWidget('CActiveForm', array(
		    'enableAjaxValidation'=>false,
		    'enableClientValidation' => true,
		    'htmlOptions'=>array('class'=>'form-horizontal form-row-seperated',"enctype" => "multipart/form-data"),
		    'clientOptions' => array(
		        'validateOnSubmit' => true,
		        'afterValidate' => 'js:function(form, data, hasError) {
		                if(hasError) {
		                    for(var i in data){
		    					$("#"+i).parents(".form-group").addClass("has-error");
		    				}
		                    return false;
		                }
		                  else {
		                      form.children().removeClass("has-error");
		                      return true;
		                  }
		              }',
		        'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
		                  if(hasError){$("#"+attribute.id).parents(".form-group").addClass("has-error");}
		                  else{$("#"+attribute.id).parents(".form-group").removeClass("has-error");}
		              }'
		    )
		)); ?>
		
		<div class="portlet-body">
		    <?php echo $form->errorSummary($model, '<button data-close="alert" class="close"></button>','',
		        array('class' => 'alert alert-danger'));?>
		    <div class="tabbable">
		        <div class="tab-content no-space">
		            <div class="tab-pane active" id="tab_general">
		                <div class="form-body">
		                  
		                    <div id="hid">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'title',array('class'=>'col-md-2 control-label',)); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model,'title',array('class'=>'form-control')); ?>
                                    </div>
                                    <?php echo $form->error($model,'title'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'code',array('class'=>'col-md-2 control-label',)); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model,'code',array('class'=>'form-control')); ?>
                                    </div>
                                    <?php echo $form->error($model,'code'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'api',array('class'=>'col-md-2 control-label',)); ?>
                                    <div class="col-md-8">
                                        <?php echo $form->textField($model,'api',array('class'=>'form-control')); ?>
                                    </div>
                                    <?php echo $form->error($model,'api'); ?>
                                </div>
                                <div class="actions btn-set" style="margin:20px 0px 0px 185px;">
                                    <button class="btn green" type="submit"><i class="fa fa-check"></i> 保存</button>
                                    <button class="btn default" type="reset"><i class="fa fa-reply"></i> 重置</button>
                                </div>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <?php $this->endWidget(); ?>
	</div>
</div>
    <!--<script>-->
    <!--    var uploadUrl = '--><?php //echo ImageServiceHandle::uploadUrl();?><!--'-->
    <!--</script>-->
