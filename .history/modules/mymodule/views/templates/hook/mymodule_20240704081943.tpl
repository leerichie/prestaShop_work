{**
 * Lee Template One
 * @author Lee
 *}


<div id="lee_home_tpl">
    <h1 class="title_one">{l s='The Leeski Mod' mod='mymodule'}</h1>
    <p>Hello,
        {if isset($my_module_name) && $my_module_name}
            {$my_module_name}
        {else}
            World
        {/if}
        ! "{$my_module_img}iconweb.gif"
    </p>
    <ul class="link_me">
        <li><a href="{$my_module_link}" title="Click link">Enter</a></li>
        <li><a href="http://bbc.co.uk/sport" title="Click for sports">Sports</a></li>
        <li><a href="http://sklep.metalzbyt.com.pl" title="Metalzbyt Olsztyn">Budowlany</a></li>
    </ul>
</div>