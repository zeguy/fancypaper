@extends('layouts.master')

@section('content')

<form method='POST' action='/prints'>
  {{ csrf_field() }}
  <fieldset name="Breakeven">

    <legend><b>Breakeven</b></legend>

    <label for="artist">Artist:</label>
    <input type="text" name="artist" id="artist" required="required" placeholder="required" value=''>

    <label for="printName">Print:</label>
    <input type="text" name="printName" id="printName" required="required" placeholder="required" value=''>

    <label for="variant">Variant:</label>
    <input type="checkbox" name="variant" id="variant">

    <label for="cost">Cost:</label>
    <input type="number" name="cost" id="cost" required="required" placeholder="required" min="0" step="0.01" value=''>

    <label for="condition">Condition:</label>
      <select name="condition" id="condition">
        <option value="very good">Very Good</option>
        <option value="good">Good</option>
        <option value="fair">Fair</option>
        <option value="poor">Poor</option>
      </select>

    <button type="submit" name="submit" value="Submit">Submit</button>

  </fieldset>

</form>

{{ $message }}

@endsection