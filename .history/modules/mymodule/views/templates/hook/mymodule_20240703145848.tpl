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
        !
    </p>
    <ul class="link_me">
        <li><a href="{$my_module_link}" title="Click link">Click me!</a></li>
        <li><a href="http://bbc.co.uk/sport" title="Click for sports">Sports</a></li>
        <li><a href="http://metalbyt.com.pl" title="Metalzbyt Olsztyn">Budowlany</a></li>
        <li><a href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
                /></a>
        </li>
</div>