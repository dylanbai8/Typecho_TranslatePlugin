# Typecho_TranslatePlugin

TranslatePlugin 多语言 自动翻译 插件 (由ChatGPT生成)

切换语言自动翻译全站文章，调用edge免费接口，无限次数。

https://www.123pan.com/s/yFT9-gG8ch.html

# ChatGPT 提示词

```
使用php为typecho博客写一个插件，功能如下：

1.把以下代码自动添加到当前主题的 footer.php 末尾
<script src="https://cdn.staticfile.net/translate.js/3.5.1/translate.js"></script>
<script>
translate.language.setLocal('chinese_simplified'); //设置本地语种（当前网页的语种）。如果不设置，默认自动识别当前网页显示文字的语种。 可填写如 'english'、'chinese_simplified' 等，具体参见文档下方关于此的说明。
translate.service.use('client.edge'); //设置机器翻译服务通道，直接客户端本身，不依赖服务端 。相关说明参考 http://translate.zvo.cn/43086.html
translate.language.translateLanguagesRange = ['chinese_simplified'];
translate.execute();//进行翻译
</script>


1.把以下代码自动添加到当前主题的 header.php 合适的位置
<style>
.language-switcher {
    position: absolute;
    top: 10px;
    right: 10px;
}
.language-switcher a {
    font-size: 0.6em;
    color: #00AEED;
    text-decoration: none;
}
.language-switcher a:hover {
    text-decoration: underline;
}
.language-switcher select {
    font-size: 0.6em;
    color: #00AEED;
    width: 80px;
    height: 27px;
}
</style>

<div class="language-switcher ignore">
    <a href="javascript:translate.changeLanguage('chinese_simplified');">简体中文</a> |
    <a href="javascript:translate.changeLanguage('chinese_traditional');">繁體中文</a> |
    <a href="javascript:translate.changeLanguage('english');">English</a> |
    <a id="translate"></a>
</div>

在 控制台-插件管理 为插件显示以下信息：
插件名称“TranslatePlugin”，插件描述“TranslatePlugin”，版本“1.0”，作者“chatgpt”。

```

![image](https://github.com/dylanbai8/Typecho_TranslatePlugin/assets/26950227/48a748a1-c5a7-4cdd-859e-5fca173b4f62)

![image](https://github.com/dylanbai8/Typecho_TranslatePlugin/assets/26950227/38b02f22-4984-471a-a3d1-8766204f4714)

![image](https://github.com/dylanbai8/Typecho_TranslatePlugin/assets/26950227/f53886a7-79dc-4d59-a4fd-ae569dbbb2ad)

