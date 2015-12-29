






<div class="form-group">
  <label for="reverse_direction" class="col-md-3 control-label">
    Direction
  </label>
  <div class="col-md-7">
    <label class="radio-inline">
      <input type="radio" name="reverse_direction"
             id="reverse_direction"
      @if (! $reverse_direction)
        checked="checked"
      @endif
      value="0"> Normal
    </label>
    <label class="radio-inline">
      <input type="radio" name="reverse_direction"
      @if ($reverse_direction)
        checked="checked"
      @endif
      value="1"> Reversed
    </label>
  </div>
</div>