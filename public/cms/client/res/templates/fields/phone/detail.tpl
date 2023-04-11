{{#if phoneNumberData}}
    {{#each phoneNumberData}}
        <div>
            {{#if ../doNotCall}}<s>{{/if}}
            {{#unless erased}}
            <a href="tel:{{valueForLink}}" data-phone-number="{{valueForLink}}" data-action="dial">
            {{/unless}}
            {{phoneNumber}}
            {{#unless erased}}
            </a>
            {{/unless}}
            {{#if ../doNotCall}}</s>{{/if}}
            {{#if type}}
            <span class="text-muted small">({{translateOption type scope=../../scope field=../../name}})</span>
            {{/if}}
        </div>
    {{/each}}
{{else}}
    {{#if value}}
    {{#if doNotCall}}<s>{{/if}}<a href="tel:{{valueForLink}}" data-phone-number="{{valueForLink}}" data-action="dial">{{value}}</a>{{#if ../doNotCall}}</s>{{/if}}
    {{else}}
        {{#if valueIsSet}}{{{translate 'None'}}}{{else}}...{{/if}}
    {{/if}}
{{/if}}
