<div>
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#vertically-centered">
        Vertically centered
      </button>
    
      <x-modal id="vertically-centered" title="Vertically centered" :centered="true">
        <x-slot name="body">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </x-slot>
        <x-slot name="footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </x-slot>
      </x-modal>
</div>