
export default {
    //Server deployment
    //url : location.origin,
    update:null,
    //Github depl
    url: 'https://my-portfolio2022-klim.herokuapp.com',
    setUpdateProc(callback) {
        this.update = callback;
    },
    refresh(lang = 'ru'){
      return this.update(lang);
    },
    getSimpleData:async function (){
        return await fetch(this.url+'/simpldata/').then((ret)=>{return ret.json();});
    },


    getHomeData: async function(lang = 'ru'){
        if (lang === 'ffs' ) {return lang;}
        let ret = {hello_text:['Hello Everyone'],
                    who_text:['I\'am Klim'],
                    short_desc_text:['And this is my programmers blog'],
                    portfolio_button_text:['Check portfolio'],
                    next_text:['Go next']
        }
        return ret;
    },

    getCVData: async function(lang = 'ru'){

        let ret = await (await fetch(this.url + '/cv/' + lang)).json();
        return await ret;
    },



}
