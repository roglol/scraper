@include('footer.adminFooter')
<script>
    $( document ).ready(function() {
        $('.edit').click(function(){
            var id = $(this).data('id')
            $('#addwebsite').modal('show');
            $.get(`/admin/websites/${id}`, function( data ) {
                var {website,selectedcategories} = data;
                $('#addwebsite').find('form').attr('action',`/admin/websites/${id}`)
                $('#addwebsite').find('.modal-title').text('Edit ' + website['name'])
                $('#addwebsite').find("input[name='name']").val(website['name'])
                $('#addwebsite').find("input[name='domain']").val(website['domain'])
                $('#addwebsite').find('.select2').val(selectedcategories)
                $('#addwebsite').find('.select2').trigger('change')
       })          
    });
    $('#addwebsite').on('hidden.bs.modal', function () {
        $('#addwebsite').find('form').attr('action',`/admin/websites`)  
                $('#addwebsite').find('.modal-title').text('New Website')
                $('#addwebsite').find("input[name='name']").val('')
                $('#addwebsite').find("input[name='domain']").val('')
                $('#addwebsite').find('.select2').val([])
                $('#addwebsite').find('.select2').trigger('change')
    })
    $('.delete').click(function(){
        var id = $(this).data('id')
        var name = $(this).data('name')
        $('#deletewebsite').modal('show');
        $('#deletewebsite').find('form').attr('action',`/admin/websites/delete/${id}`)
        $('#deletewebsite').find('p').text(`Do you want to delete ${name}`)
    })
    })
</script>