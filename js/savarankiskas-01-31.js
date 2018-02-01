$(document).ready(() =>{
  // bropdown menu
  $('._1').on('click', () =>{
    $('.drop1').show();
    $('._1').on('focusout', ()=>{
      $('.drop1').hide('slow');
    })
  });
  $('._2').on('click', () =>{
    $('.drop2').show();
    $('._2').on('focusout', ()=>{
      $('.drop2').hide('slow');
    })
  });
  $('._3').on('click', () =>{
    $('.drop3').toggle();
    $('._3').on('focusout', ()=>{
      $('.drop3').hide('slow');
    })
  });
  $('._4').on('click', () =>{
    $('.drop4').toggle();
    $('._4').on('focusout', ()=>{
      $('.drop4').hide('slow');
    })
  });
  //nav icon
  $('.icon-1').on('click', () =>{
    $('.login').toggle();
  });
  $('.icon-2').on('click', () =>{
    $('.comment').toggle();
  });
  $('.icon-3').on('click', () =>{
    $('.search').toggle();
  });
  //more info...
  $('.m_inf-1').on('click', () =>{
    $('.item1').show('slow');
    $('.m_inf-1').on('focusout', ()=>{
      $('.item1').hide('slow');
    })
  });
  $('.m_inf-2').on('click', () =>{
    $('.item2').show('slow');
    $('.m_inf-2').on('focusout', ()=>{
      $('.item2').hide('slow');
    })
  });
  $('.m_inf-3').on('click', () =>{
    $('.item3').show('slow');
    $('.m_inf-3').on('focusout', ()=>{
      $('.item3').hide('slow');
    })
  });
  $('.m_inf-4').on('click', () =>{
    $('.item4').show('slow');
    $('.m_inf-4').on('focusout', ()=>{
      $('.item4').hide('slow');
    })
  });
  $('.m_inf-5').on('click', () =>{
    $('.item5').show('slow');
    $('.m_inf-5').on('focusout', ()=>{
      $('.item5').hide('slow');
    })
  });
  $('.m_inf-6').on('click', () =>{
    $('.item6').show('slow');
    $('.m_inf-6').on('focusout', ()=>{
      $('.item6').hide('slow');
    })
  });
  $('.m_inf-7').on('click', () =>{
    $('.item7').show('slow');
    $('.m_inf-7').on('focusout', ()=>{
      $('.item7').hide('slow');
    })
  });
  $('.m_inf-8').on('click', () =>{
    $('.item8').show('slow');
    $('.m_inf-8').on('focusout', ()=>{
      $('.item8').hide('slow');
    })
  });
  //add to cart popup
  $('.add_1').on('click', function(){
    $('.wrap, .add_1').toggleClass('active');
    return false;
  });
  $('.add_2').on('click', function(){
    $('.wrap2, .add_2').toggleClass('active');
    return false;
  });
  $('.add_3').on('click', function(){
    $('.wrap3, .add_3').toggleClass('active');
    return false;
  });
  $('.add_4').on('click', function(){
    $('.wrap4, .add_4').toggleClass('active');
    return false;
  });
  $('.add_5').on('click', function(){
    $('.wrap5, .add_5').toggleClass('active');
    return false;
  });
  $('.add_6').on('click', function(){
    $('.wrap6, .add_6').toggleClass('active');
    return false;
  });
  $('.add_7').on('click', function(){
    $('.wrap7, .add_7').toggleClass('active');
    return false;
  });
  $('.add_8').on('click', function(){
    $('.wrap8, .add_8').toggleClass('active');
    return false;
  });
  $('#tryTry').on('click', () =>{
    $('.try1').toggle('slow');
    $('.free').text('Free trail starts today!!')
    // alert('Free trail started!!!');
  });

});