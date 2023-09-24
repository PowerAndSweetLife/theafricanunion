$(document).ready(function() {

    $(".section_solution").hide() ;
    $(".section_solution[data-target='developpement_economique']").show() ;
    $(document.body).on('click','.solution_check',function() {
        var target = $(this).attr('id') ;
        $(".solution_check").removeClass('active') ;
        $(this).addClass('active')
        $(".section_solution").hide() ;
        $(".section_solution[data-target='"+target+"']").show() ;
    })

})