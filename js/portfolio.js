Query( document ).ready(function() {
    var lis = jQuery('.portfolio-item', '.portfolio');
    var delay = 0;
    
    lis.each(function() {
        var $li = jQuery(this);
        $li.queue('fade', function(next) {
            $li.delay(delay).fadeIn(750, next);
        });
        
        $li.dequeue('fade');
        
        delay += 150;
    });
});
