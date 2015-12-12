@extends('admin.layouts.dashboard')

@include('partials.macros')

@section('template_title')
	Welcome {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
	 <div class="content-wrapper">
	    <section class="content-header">
			<h1>
				{{ Lang::get('pages.dashboard-welcome',['username' => $user->name] ) }} <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
			</h1>
            <ol class="breadcrumb">
                <li><a href="/users"><i class="fa fa-users"></i> Users</a></li>
                <li class="active"><i class="fa fa-smile-o"></i> Show Users</li>
            </ol>

	    </section>
	    <section class="content">

			@include('admin.partials.return-messages')
			@include('admin.modules.users-table-list-edit')
			@include('admin.modals.confirm-delete')

	    </section>
	</div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')

	<script type="text/javascript">
		$(function () {
			$('#user_table').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": true
			});
		});
    </script>

	<script type="text/javascript">
		$('#confirmDelete').on('show.bs.modal', function (e) {
			var message = $(e.relatedTarget).attr('data-message');
			var title = $(e.relatedTarget).attr('data-title');
			var form = $(e.relatedTarget).closest('form');
			$(this).find('.modal-body p').text(message);
			$(this).find('.modal-title').text(title);
			$(this).find('.modal-footer #confirm').data('form', form);
		});

		$('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
		  	$(this).data('form').submit();
		});
	</script>

@endsection