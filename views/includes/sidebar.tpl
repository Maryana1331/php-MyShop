

<div class="flex-shrink-0 p-3" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Каталог</span>
    </a>
    <ul class="list-unstyled ps-0">
        {foreach $allCategories as $item}
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#{$item['name_en']}-collapse" aria-expanded="false">
                    {$item['name']}
                </button>
                {if isset($item['children'])}
                    <div class="collapse" id="{$item['name_en']}-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            {foreach $item['children'] as $itemChild}
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">{$itemChild['name']}</a></li>
{*                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>*}
{*                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>*}
{*                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>*}
                            {/foreach}
                        </ul>
                    </div>
                {/if}
            </li>

            {/foreach}

    </ul>
    <ul class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Личный кабинет
        </button>
        <div class="collapse" id="account-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sign out</a></li>
            </ul>
        </div>
    </ul>
</div>