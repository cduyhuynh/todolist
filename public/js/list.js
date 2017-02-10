$(document).ready(function()
{
    $('.create-todo').click(function(){
        var parent      = $(this).parent();
        var title       = $(parent).children('.new-title').val();
        var desc        = $(parent).children('.new-desc').val();
        var category_id = $(parent).children('.cate-id').val();
        $.post("/todo/create",
        {
            title: title,
            desc : desc,
            category_id: category_id
        }, function(res)
        {
            if(res.status === 0)
            {
                alert('Error!');
                console.log(res.message);
            }else
            {
                location.reload();
            }
        });
    })
})
