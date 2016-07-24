關於表單的設定，各值定義如下
----------------------------
* name: 這個表單的中文名稱
* mainpage-url: 這個表單所在的網站的首頁　
* form-url: 找的到這個表單本身所在的網址
* form-post-url: 這個表單送出時會到哪個網址
* required_fields: 一個 array ，列出哪些欄位是必填的
* fields: 定義有哪些欄位可以用，這是個 array ，裡面每一項 object 定義了每個欄位的值
　* name: 這個欄位在 form 中的 name
  * title: 這個欄位給人看的名稱　
  * category: 這個欄位的類型 ex: name 姓名, email 信箱, title 標題, body 內文, address 地址, tel 電話
  * length: 長度上限
  * type: 特殊的 field Ex: textarea 支援多行, hidden 隱藏值(需要多指定 value)
* captcha: 是否有 captcha 需要載入，值是 object ，一定會有 type property 
　* type=url-text : captcha 類型為某個網址的純文字
    * url: captcha 所在網址
    * hint: 描述
    * name: captcha 的 input name
