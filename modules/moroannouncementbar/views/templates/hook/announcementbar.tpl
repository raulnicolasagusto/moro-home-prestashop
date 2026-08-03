{**
 * Moro Announcement Bar.
 *}

<aside
  class="moro-announcement-bar"
  data-ps-component="moro-announcement-bar"
  data-ps-data='{ldelim}"interval":{$moro_announcement_interval|intval}{rdelim}'
  style="--moro-announcement-bg: {$moro_announcement_items[0].background|escape:'html':'UTF-8'}; --moro-announcement-color: {$moro_announcement_items[0].color|escape:'html':'UTF-8'};"
  aria-label="{l s='Announcements' d='Modules.Moroannouncementbar.Shop'}"
>
  <div class="moro-announcement-bar__inner" aria-live="polite" data-ps-ref="announcement-message">
    {foreach from=$moro_announcement_items item=announcement name=announcementLoop}
      {assign var=isSelected value=$smarty.foreach.announcementLoop.first}
      {if !empty($announcement.url)}
        <a
          class="moro-announcement-bar__message{if $isSelected} moro-announcement-bar__message--active{/if}"
          href="{$announcement.url|escape:'html':'UTF-8'}"
          data-ps-ref="announcement-item"
          data-background="{$announcement.background|escape:'html':'UTF-8'}"
          data-color="{$announcement.color|escape:'html':'UTF-8'}"
          {if !$isSelected}aria-hidden="true" tabindex="-1"{/if}
        >
          <b>{$announcement.message|escape:'html':'UTF-8'}</b>
        </a>
      {else}
        <span
          class="moro-announcement-bar__message{if $isSelected} moro-announcement-bar__message--active{/if}"
          data-ps-ref="announcement-item"
          data-background="{$announcement.background|escape:'html':'UTF-8'}"
          data-color="{$announcement.color|escape:'html':'UTF-8'}"
          {if !$isSelected}aria-hidden="true"{/if}
        >
          <b>{$announcement.message|escape:'html':'UTF-8'}</b>
        </span>
      {/if}
    {/foreach}
  </div>
</aside>
