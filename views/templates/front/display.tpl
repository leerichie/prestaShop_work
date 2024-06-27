{extends file='page.tpl'}

{block name='page_content'}
    <h1>{$my_module_message}</h1>

    <form action="{$link->getModuleLink('mymodule', 'display')}" method="post">
        <div class="form-group">
            <label for="search_term">Search for a car:</label>
            <input type="text" name="search_term" id="search_term" class="form-control" placeholder="Enter make or model"
                required>
        </div>
        <button type="submit" name="searchCar" class="btn btn-primary">Search</button>
    </form>

    {if $car_list|@count > 0}
        <h2>Search Results:</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$car_list item=car}
                    <tr>
                        <td>{$car.make}</td>
                        <td>{$car.model}</td>
                        <td>{$car.year}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    {else}
        <p>No cars found matching your criteria.</p>
    {/if}
{/block}