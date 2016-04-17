<a href="#" class="each-component">
    <div class="each">
        <h3>{{ info.name }}</h3>
        <div ng-bind-html="info.code | unsafe"></div>
        <p>{{ info.details }}</p> 
    </div>
</a>