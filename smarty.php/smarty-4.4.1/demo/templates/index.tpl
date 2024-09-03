{config_load file="test.conf" section="setup"} 
{include file="header.tpl" title=foo}
{include file="categories.tpl"}
{include file="employees.tpl"}
{include file="orders.tpl"}
{include file="petshops.tpl"}
{include file="products.tpl"}
{include file="users.tpl"}
<h3>{$full_name}</h3>

<!-- 
    An example of section looped key values:

    {section name=sec1 loop=$contacts}
        phone: {$contacts[sec1].phone}
        <br>

            fax: {$contacts[sec1].fax}
        <br>

            cell: {$contacts[sec1].cell}
        <br>
    {/section}
-->
{include file="footer.tpl"}
