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
		                <div class="form-body">
                             <div class="form-group">
                                <?php echo $form->labelEx($model,'title',array('class'=>'col-md-2 control-label',)); ?>
                                 <div class="col-md-8">
                                   <?php echo $form->textField($model,'title',array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'title'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'starttime',array('class'=>'col-md-2 control-label')); ?>
                                <div class="col-md-8">
                                    <?php echo $form->dateField($model,'starttime',array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'starttime'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'endtime',array('class'=>'col-md-2 control-label')); ?>
                                <div class="col-md-8">
                                    <?php echo $form->dateField($model,'endtime',array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'endtime'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'type',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->dropDownList($model,'type',CouponModel::$typeArray,array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'type'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'is_limit',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->checkBox($model,'is_limit',array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'is_limit'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'is_register',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->checkBox($model,'is_register',array('class'=>'form-control')); ?>
                                </div>
                                <?php echo $form->error($model,'is_register'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'mix_price',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->textField($model,'mix_price',array('class'=>'form-control','onkeyup'=>"value=value.replace(/[^\d\.]/g,'')",'onblur'=>"value=value.replace(/[^\d\.]/g,'')")); ?>
                                </div>
                                <?php echo $form->error($model,'mix_price'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'price',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->textField($model,'price',array('class'=>'form-control','onkeyup'=>"value=value.replace(/[^\d\.]/g,'')",'onblur'=>"value=value.replace(/[^\d\.]/g,'')")); ?>
                                </div>
                                <?php echo $form->error($model,'price'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'discount',array('class'=>'col-md-2 control-label',)); ?>
                                <div class="col-md-8">
                                    <?php echo $form->textField($model,'discount',array('class'=>'form-control','onkeyup'=>"value=value.replace(/[^\d\.]/g,'')",'onblur'=>"value=value.replace(/[^\d\.]/g,'')" )); ?>
                                </div>
                                <?php echo $form->error($model,'discount'); ?>
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
