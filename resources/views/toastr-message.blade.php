@if(session()->has("success"))
<script>
    toastr.success("{{ session()->get('success') }}", null, {
        closeButton: true,
        progressBar: true,
        extendedTimeOut: 2000,
        timeOut: 5000,
    });
</script>
@endif

@if(session()->has("error"))
<script>
    toastr.error("{{ session()->get('error') }}", null, {
        closeButton: true,
        progressBar: true,
        extendedTimeOut: 2000,
        timeOut: 5000,
    });
</script>
@endif

@if($errors->any())
<script>
    toastr.error("{{ $errors->first() }}", null, {
        closeButton: true,
        progressBar: true,
        extendedTimeOut: 2000,
        timeOut: 5000,
    });
</script>
@endif

