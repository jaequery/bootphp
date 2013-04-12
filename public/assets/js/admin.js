$(document).ready( function(){
    admin.init();
});
var admin = {
    pages: [],
    init: function(){
        for(x in this.pages){
            pages[x].init();
        }
        this.triggers();

	this.events.mainmenu();

    },
    triggers: function(){
        //submission of boot api data
        $('.boot-api-data').on('submit', function(e){
            e.preventDefault();
            var opts = {
                data: util.serializeForm(this),
                cmd: $(this).data('cmd'),
                model: $(this).data('model')
            };
            $.post('/api/data', opts, function(res){
                if(res.status.code == 200){
                    switch(cmd){
                        case 'update': location.history.go(-1); break;
                    }
                }
            });
        });
    },
    events: {
	mainmenu: function(){
	    $('.boot-mainmenu li a').each(function(){
		var cur_url = window.location.pathname;
		var menu_url = $(this).attr('href');
		if(cur_url == menu_url){
		    $(this).parent().addClass('active');
		}
	    });
	}
    }
};

var util = {
    serializeForm: function(target){
            var post = {};
            var form = $(target).serializeArray();
            $.each(form, function(k,v){
                    if( v.value ){
                            post[v.name] = v.value;
                    }else{
                        post[v.name] = '';
                    }
            });
            return post;
    }
}
