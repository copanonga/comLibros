<?php
defined('_JEXEC') or die;

?>

<form action="<?php echo JRoute::_('index.php?option=com_libros&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
    <div class="row-fluid">
        <div class="span10 form-horizontal">

            <fieldset>
                <?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

                    <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_LIBROS_NEW_LIBRO', true) : JText::sprintf('COM_LIBROS_EDIT_LIBRO', $this->item->id, true)); ?>
                
                        <?php echo JHtml::_('bootstrap.addPanel', 'myTab', 'details', empty($this->item->id) ? JText::_('COM_FOLIO_NEW_FOLIO', true) : JText::sprintf('COM_FOLIO_EDIT_FOLIO', $this->item->id, true)); ?>

                        <?php foreach ($this->form->getFieldset('myfields') as $field) : ?>
                                <div class="control-group">
                                        <div class="control-label">
                                                <?php echo $field->label; ?>
                                        </div>
                                        <div class="controls">
                                                <?php echo $field->input; ?>
                                        </div>
                                </div>
                        <?php endforeach; ?>

                    <?php echo JHtml::_('bootstrap.endTab'); ?>

                    <input type="hidden" name="task" value="" />
                    <?php echo JHtml::_('form.token'); ?>

                <?php echo JHtml::_('bootstrap.endTabSet'); ?>
            </fieldset>
            </div>
    </div>
</form>