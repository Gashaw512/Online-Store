<style>
    .form-center{
      display:flex;
    justify-content: center;
    }
  
    form {
    box-sizing: border-box;
    padding: 2rem;
    border-radius: 1rem;
    background-color: hsl(0, 0%, 100%);
    border: 4px solid hsl(0, 0%, 90%);
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
  }
   
  
      .mb-1 {
        margin-bottom: 10px;
      }
  
      .input {
        padding: 9px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        width: 100%;
      }
  
      .styled {
      border: 0;
      line-height: 2.5;
      padding: 0 20px;
      font-size: 1rem;
      text-align: center;
      color: #fff;
      text-shadow: 1px 1px 1px #000;
      border-radius: 10px;
      background-color: rgba(220, 0, 0, 1);
      background-image: linear-gradient(to top left,
                                        rgba(0, 0, 0, .2),
                                        rgba(0, 0, 0, .2) 30%,
                                        rgba(0, 0, 0, 0));
      box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                  inset -2px -2px 3px rgba(0, 0, 0, .6);
  }
  
  .styled:hover {
      background-color: rgba(255, 0, 0, 1);
  }
  
  .styled:active {
      box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                  inset 2px 2px 3px rgba(0, 0, 0, .6);
  }
      .textarea {
        padding: 9px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        width: 100%;
        font-size: 1.1rem;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }



      /* Custom select element */


.custom-select {
  position: relative;
  font-family: Arial;
}

/* .custom-select select {
  display: none; /*hide original SELECT element: */
} */

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */


.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
    </style>