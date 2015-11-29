
{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js', array('type' => 'text/javascript')) !!}


{!! HTML::script('/assets/js/admin/admin.js', array('type' => 'text/javascript')) !!}

{{-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --}}
<script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
</script>

{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js', array('type' => 'text/javascript')) !!}
{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js', array('type' => 'text/javascript')) !!}