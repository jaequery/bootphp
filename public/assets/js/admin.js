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
                    switch(opts.cmd){
                        case 'update': history.back(); break;
                    }
                }
            });
        });
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
