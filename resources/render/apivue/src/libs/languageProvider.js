/*
Handles language
* */
export default {
    lang:{name:"Язык",code:"ru",flag:"🇷🇺"},
    changeLanguage(lang) {
        this.lang = lang
    },
    getLanguageCode(){
        return this.lang.code;
    },
    getLanguage(){
        return this.lang
    }

}
