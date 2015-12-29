<div class="modal fade modal-primary" id="confirmSave" role="dialog" aria-labelledby="confirmSaveLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Confirm Save</h4>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			<div class="modal-footer">
				{!! Form::button('<i class="fa fa-fw fa-close" aria-hidden="true"></i> Cancel', array('class' => 'btn btn-outline pull-left btn-flat', 'type' => 'button', 'data-dismiss' => 'modal' )) !!}
				{!! Form::button('<i class="fa fa-fw fa-save" aria-hidden="true"></i> Save Changes', array('class' => 'btn btn-outline pull-right btn-flat', 'type' => 'button', 'id' => 'confirm' )) !!}
			</div>
		</div>
	</div>
</div>