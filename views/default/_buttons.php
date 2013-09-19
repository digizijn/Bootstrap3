<?php
    $id = uniqid('test_');
    if(!isset($code))
        $code = false;
?>
<ul id="<?php echo $id ?>" class="nav nav-tabs">
    <li>
        <a href="#home_<?php echo $id ?>" data-toggle="tab">
            <i class="icon-book" data-toggle="tooltip" data-title="Yii-Feature Buttons"></i>
            <span>Yii-Feature Buttons</span>
        </a>
    </li>
    <?php if($code) : ?>
    <li>
        <a href="#button_groups<?php echo $id ?>" data-toggle="tab">
            <i class="icon-book" data-toggle="tooltip" data-title="Button Groups"></i>
            <span>Button Groups</span>
        </a>
    </li>
    <?php endif;?>
    <li class="active">
        <a href="#profile_<?php echo $id ?>" data-toggle="tab">
            <i class="icon-book" data-toggle="tooltip"data-title="Button Sizes">
            </i><span>Button Sizes</span>
        </a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade" id="home_<?php echo $id ?>">
    <p>
        <?php echo BSHtml::linkButton('Google', array(
            'url' => 'http://www.google.de',
            'target' => '_blank',
            'size' => BSHtml::BUTTON_SIZE_SMALL,

        ))
        ?>
        <?php echo BSHtml::submitButton('BSHtml::submitButton',
            array(
                'color' => BSHtml::BUTTON_COLOR_INFO,
                'confirm' => 'Whooza ?'
            )
        ); ?>
        <?php echo BSHtml::ajaxButton(
            'BSHtml::ajaxButton',
            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
            array(
                'cache' => true,
                'data' => array(
                    'message' => 'Lorem Ipsum Message.'
                ),
                'type' => 'POST',
                'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
            ),
            array(
                'color' => BSHtml::BUTTON_COLOR_INFO,
                'icon' => BSHtml::ICON_BELL
            )
        ); ?>
        <?php echo BSHtml::ajaxLink('BSHtml::ajaxLink',
            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
            array(
                'cache' => true,
                'data' => array(
                    'message' => 'Lorem Ipsum Message.'
                ),
                'type' => 'POST',
                'success' => 'js:function(data){
                    console.log(data);
                    $(".modal-body").html(data);
                    $("#demo_modal").modal("show");
                }',
            ),
            array(
                'icon' => BSHtml::ICON_BELL
            )
        ); ?>
        <?php if ($code) : ?>
                    <pre class="pre-scrollable">
                        &lt;?php echo BSHtml::linkButton('Google',array(
                            'url' => 'http://www.google.de',
                            'target' => '_blank',
                            'size' => BSHtml::BUTTON_SIZE_SMALL,

                        ))
                        ?&gt;
                        &lt;?php echo BSHtml::submitButton('BSHtml::submitButton',
                            array(
                                'color' => BSHtml::BUTTON_COLOR_INFO,
                                'confirm' => 'Whooza ?'
                            )
                        ); ?&gt;
                        &lt;?php echo BSHtml::ajaxButton(
                            'BSHtml::ajaxButton',
                            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
                            array(
                                'cache' => true,
                                'data' => array(
                                    'message' => 'Lorem Ipsum Message.'
                                ),
                                'type' => 'POST',
                                'success' => 'js:function(data){
                                    console.log(data);
                                    $(".modal-body").html(data);
                                    $("#demo_modal").modal("show");
                                }',
                            ),
                            array(
                                'color' => BSHtml::BUTTON_COLOR_INFO,
                                'icon' => BSHtml::ICON_BELL
                            )
                        ); ?&gt;
                        &lt;?php echo BSHtml::ajaxLink('BSHtml::ajaxLink',
                            Yii::app()->createAbsoluteUrl('bootstrap/default/ajaxTest'),
                            array(
                                'cache' => true,
                                'data' => array(
                                    'message' => 'Lorem Ipsum Message.'
                                ),
                                'type' => 'POST',
                                'success' => 'js:function(data){
                                    console.log(data);
                                }',
                            ),
                            array(
                                'icon' => BSHtml::ICON_BELL
                            )
                        ); ?&gt;
                    </pre>
    </p>
    <?php endif; ?>
</div>
<?php if($code) : ?>
<div class="tab-pane fade" id="button_groups<?php echo $id ?>">
    <?php $this->renderPartial('_buttons_group',array('code' => $code)) ?>
</div>
<?php endif; ?>
<div class="tab-pane fade in active" id="profile_<?php echo $id ?>">
    <p>
        <?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_LARGE
            )
        );
        ?>
        <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Default', array('size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK, 'size' => BSHtml::BUTTON_SIZE_LARGE)); ?>
        <?php if ($code) : ?>
        <pre class="pre-scrollable">
        &lt;?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_LARGE
            )
        );
        ?>
        &lt;?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        &lt;?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_LARGE)); ?&gt;
        </pre>
    <?php endif; ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_DEFAULT //default value BSHtml::BUTTON_SIZE_DEFAULT=''
            )
        );
        ?>
        <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER)); ?>
        <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING)); ?>
        <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS)); ?>
        <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO)); ?>
        <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE)); ?>
        <?php echo BSHtml::button('Default'); ?>
        <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK)); ?>
        <?php if ($code) : ?>
        <pre class="pre-scrollable">
        &lt;?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_DEFAULT
            )
        );
        ?>
        &lt;?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER)); ?&gt;//default value BSHtml::BUTTON_SIZE_DEFAULT=''
        &lt;?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING)); ?&gt;
        &lt;?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS)); ?&gt;
        &lt;?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO)); ?&gt;
        &lt;?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE)); ?&gt;
        &lt;?php echo BSHtml::button('Default'); ?&gt;
        &lt;?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK)); ?&gt;
        </pre>
<?php endif; ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_SMALL
            )
        );
        ?>
        <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Default', array('size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK, 'size' => BSHtml::BUTTON_SIZE_SMALL)); ?>
        <?php if ($code) : ?>
        <pre class="pre-scrollable">
        &lt;?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_SMALL
            )
        );
        ?>
        &lt;?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        </pre>
<?php endif; ?>
    </p>
    <p>
        <?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_MINI
            )
        );
        ?>
        <?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Default', array('size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK, 'size' => BSHtml::BUTTON_SIZE_MINI)); ?>
        <?php if ($code) : ?>
        <pre class="pre-scrollable">
        &lt;?php echo BSHtml::button(
            'Primary',
            array(
                'color' => BSHtml::BUTTON_COLOR_PRIMARY,
                'size' => BSHtml::BUTTON_SIZE_MINI
            )
        );
        ?>
        &lt;?php echo BSHtml::button('Danger', array('color' => BSHtml::BUTTON_COLOR_DANGER,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        &lt;?php echo BSHtml::button('Warning', array('color' => BSHtml::BUTTON_COLOR_WARNING,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        &lt;?php echo BSHtml::button('Success', array('color' => BSHtml::BUTTON_COLOR_SUCCESS,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        &lt;?php echo BSHtml::button('Info', array('color' => BSHtml::BUTTON_COLOR_INFO,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        &lt;?php echo BSHtml::button('Inverse', array('color' => BSHtml::BUTTON_COLOR_INVERSE,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        &lt;?php echo BSHtml::button('Default',array('size' => BSHtml::BUTTON_SIZE_SMALL)); ?&gt;
        &lt;?php echo BSHtml::button('Link', array('color' => BSHtml::BUTTON_COLOR_LINK,'size' => BSHtml::BUTTON_SIZE_MINI)); ?&gt;
        </pre>
<?php endif; ?>
    </p>
</div>
</div>
<script>
    $(function () {
        $('#<?php echo $id?> a.active').tab('show');
        $('[data-toggle="dropdown"]').dropdown();
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>
