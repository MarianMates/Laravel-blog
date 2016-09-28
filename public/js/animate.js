$('.hw').textillate({
  loop: true,
  in: {
    effect: 'flash',
    sequence: true
  },
  out: {
    effect: 'flash',
    sync: true
  }
});

$('.cb').textillate({
  loop:true,
  in: {
    effect: 'flash',
    sync: true
  },
  out: {
    effect: 'fadeOut',
    sync: true
  }
});
