@include('footer.adminFooter')
<script>
    $( document ).ready(function() {
        $('.edit').click(function(){
            var id = $(this).data('id')
            $('#addcategory').modal('show');
            $.get(`/admin/categories/${id}`, function( data ) {
                var {category} = data;
                $('#addcategory').find('form').attr('action',`/admin/categories/${id}`)
                $('#addcategory').find('.modal-title').text('Edit ' + category['name'])
                $('#addcategory').find("input[name='name']").val(category['name'])
       })          
    });
    $('#addcategory').on('hidden.bs.modal', function () {
        $('#addcategory').find('form').attr('action',`/admin/categories`)  
                $('#addcategory').find('.modal-title').text('New Category')
                $('#addcategory').find("input[name='name']").val('')
    })
    $('.delete').click(function(){
        var id = $(this).data('id')
        var name = $(this).data('name')
        $('#deletecategory').modal('show');
        $('#deletecategory').find('form').attr('action',`/admin/categories/delete/${id}`)
        $('#deletecategory').find('p').text(`Do you want to delete ${name}`)
    })
    })
</script>