<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * TranslatePlugin 插件
 *
 * @package TranslatePlugin
 * @version 1.0
 * @author chatgpt
 * @link https://github.com/dylanbai8
 */
class TranslatePlugin_Plugin implements Typecho_Plugin_Interface
{
    // 激活插件
    public static function activate()
    {
        // 在footer.php末尾添加JavaScript代码
        Typecho_Plugin::factory('Widget_Archive')->footer = array('TranslatePlugin_Plugin', 'footer');
        // 在header.php合适位置添加样式和HTML代码
        Typecho_Plugin::factory('Widget_Archive')->header = array('TranslatePlugin_Plugin', 'header');
    }

    // 禁用插件
    public static function deactivate()
    {
        // 禁用时不需要做额外操作
    }

    // 配置插件
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        // 插件配置页面内容（如果有需要的话）
    }

    // 个人设置（如果有需要的话）
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
        // 个人设置页面内容（如果有需要的话）
    }

    // 在footer.php末尾添加JavaScript代码
    public static function footer()
    {
        echo '<script src="https://cdn.staticfile.net/translate.js/3.5.1/translate.js"></script>' . PHP_EOL;
        echo '<script>' . PHP_EOL;
        echo 'translate.language.setLocal(\'chinese_simplified\');' . PHP_EOL;
        echo 'translate.service.use(\'client.edge\');' . PHP_EOL;
        echo 'translate.language.translateLanguagesRange = [\'chinese_simplified\'];' . PHP_EOL;
        echo 'translate.execute();' . PHP_EOL;
        echo '</script>' . PHP_EOL;
    }

    // 在header.php合适位置添加样式和HTML代码
    public static function header()
    {
        echo '<style>' . PHP_EOL;
        echo '.language-switcher {' . PHP_EOL;
        echo '    position: absolute;' . PHP_EOL;
        echo '    top: 10px;' . PHP_EOL;
        echo '    right: 10px;' . PHP_EOL;
        echo '}' . PHP_EOL;
        echo '.language-switcher a {' . PHP_EOL;
        echo '    font-size: 0.6em;' . PHP_EOL;
        echo '    color: #00AEED;' . PHP_EOL;
        echo '    text-decoration: none;' . PHP_EOL;
        echo '}' . PHP_EOL;
        echo '.language-switcher a:hover {' . PHP_EOL;
        echo '    text-decoration: underline;' . PHP_EOL;
        echo '}' . PHP_EOL;
        echo '.language-switcher select {' . PHP_EOL;
        echo '    font-size: 0.6em;' . PHP_EOL;
        echo '    color: #00AEED;' . PHP_EOL;
        echo '    width: 72px;' . PHP_EOL;
        echo '    height: 27px;' . PHP_EOL;
        echo '}' . PHP_EOL;
        echo '</style>' . PHP_EOL;

        echo '<div class="language-switcher ignore">' . PHP_EOL;
        echo '    <a href="javascript:translate.changeLanguage(\'chinese_simplified\');">简体中文</a> |' . PHP_EOL;
        echo '    <a href="javascript:translate.changeLanguage(\'chinese_traditional\');">繁體中文</a> |' . PHP_EOL;
        echo '    <a href="javascript:translate.changeLanguage(\'english\');">English</a> |' . PHP_EOL;
        echo '    <a id="translate"></a>' . PHP_EOL;
        echo '</div>' . PHP_EOL;
    }

    // 返回插件信息
    public static function info()
    {
        return '插件名称: TranslatePlugin, 插件描述: TranslatePlugin, 版本: 1.0, 作者: chatgpt';
    }
}

