<!-- footer -->
<footer class="section-p1">
    <div class="col">
        {!! getConfigValueFormTableSetting('footer_image') !!}
        <h4>{{getConfigValueFormTableSetting('footer_number_phone')}} </h4>
        {!! getConfigValueFormTableSetting('footer_address') !!}
        <div class="follow">
            {!! getConfigValueFormTableSetting('footer_folow') !!}
        </div>
    </div>
    <div class="col install">
        {!! getConfigValueFormTableSetting('footer_install1') !!}
        <div class="row">
            {!! getConfigValueFormTableSetting('footer_install2') !!}
        </div>
        {!! getConfigValueFormTableSetting('footer_install3') !!}
    </div>
</footer>
