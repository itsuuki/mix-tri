$(function(){
  function buildHTML(category){
    var html = `
    @if ($category->parent_id === ${category})
    <option value="{{ $category->id }}" class="cate_sub">
      {{ $category->genre }}
    </option>
    @endif`
    return html;
  };
  $('.cate').on('change', function(e){
    const jave = $('#js-getVariable').data();
    const javes = $('#js-getVariabl').data();
    // var data = JSON.parse(jave);
    console.log(jave);
    console.log(javes);
    var preid = $(this).val()
    // var aa = 
    $(this).nextAll().remove()
    $(".cate_sub").append(buildHTML(preid))
    // .nextAll()で次以降全てという意味
    
      
        // console.log("ok")
        insertHNTL = ""
        
          // forEachで繰り返しの処理
          var html = buildHTML($(this).val());
          insertHNTL += html
        $(".cate").append(`<select class="cate_pare">${insertHNTL}</select>`)
      
  });
});