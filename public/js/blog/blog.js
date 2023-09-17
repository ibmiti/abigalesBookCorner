    //  : THESE DIVS ARE RELATED TO THE FIRST PIECES OF DATA USER'S SEE's ON PAGE.
    let firstDiv = document.getElementById('firstDiv');
    let secondDiv = document.getElementById('secondDiv');
    let thirdDiv = document.getElementById('thirdDiv');
    let fourthDiv = document.getElementById('fourthDiv');
    let fifthDiv = document.getElementById('fifthDiv');
    let sixthDiv = document.getElementById('sixthDiv');
    let seventhDiv = document.getElementById('seventhDiv');
    let eigthDiv = document.getElementById('eigthDiv');
    let ninthDiv = document.getElementById('ninthDiv');
    let div11 = document.getElementById('div11');
        //  : THESE BUTTONS MAY BE INVOLVED IN THE ANIMATION PROCESS OF THE PAGE
        //      1. WE SHOULD REMOVE THE UNUSED BUTTONS
    let button01 = document.getElementById('div05'),
    button02     = document.getElementById('fifthDiv'), button03, button04, button05;
        //  : THESE BUTTONS WILL GIVE USER ABILITY TO ADD ELEMENTS TO FORM
        //           1. Hide them on load
        //           2. Theres multiple of these so may have to loop
    let articleChoices = document.getElementsByClassName('article-choices');
        //  : THE SLAB IN THIS CASE IS THE FORM WHICH IS HOSTING THE INPUTS FOR THE EVENTUAL ARTICLE CREATION
    let slab                   = document.getElementById('slab');
    let createArticleButton   = document.getElementById('createArticleButton');
        // : backButton exists directly on form
    let backButton            = document.getElementById('backbutton');
    let createOrReturnButtons = document.getElementById('createOrReturn');
    let theSecondSegment = document.getElementById('theSecondSegment');
    let addSecondHeaderButton = document.getElementById('secondHeaderButton');
    let thirdHeaderButton = document.getElementById('thirdHeaderButton');
        // this segment is hidden on load, revealed on click of 'addThirdHeader'
    let addThirdHeader = document.getElementById('addThirdHeader');
    let hideTheseThingsOnPageLoad  = setTimeout( () => {
                firstDiv.style.display    = 'none';
                secondDiv.style.display   = 'none';
                thirdDiv.style.display    = 'none';
                fourthDiv.style.display   = 'none';
                fifthDiv.style.display    = 'none';
                sixthDiv.style.display    = 'none';
                sixthDiv.style.display    = 'none';
                seventhDiv.style.display  = 'none';
                ninthDiv.style.display    = 'none';
                div11.style.display       = 'none';
                button01.style.display    = 'none';
                createOrReturnButtons.style.display        = 'none';
            // hide this on load.
                document.getElementById('thirdHeaderButton').style.display = 'none';
                document.getElementById('thirdHeaderHelp').style.display = 'none';
            // hide this portion of the form until needed
                theSecondSegment.style.display             = 'none';
            // hide this portion of the form until needed
                thirdHeaderButton.style.display            = 'none';
            // hiding the third segment on load, until it is called for
                theThirdSegment.style.display             = 'none';
            // place new headers and segments here
                let fourthHeaderButton = document.getElementById('fourthHeaderButton');
                fourthHeaderButton.style.display = 'none';
                let theFourthSegment = document.getElementById('theFourthSegment');
                theFourthSegment.style.display = 'none';
        // fifth ...
                let fifthHeaderButton = document.getElementById('fifthHeaderButton');
                fifthHeaderButton.style.display = 'none';
                let theFifthSegment = document.getElementById('theFifthSegment');
                theFifthSegment.style.display = 'none';
        // sixth ...
                let sixthHeaderButton = document.getElementById('sixthHeaderButton');
                sixthHeaderButton.style.display = 'none';
                let theSixthSegment = document.getElementById('theSixthSegment');
                theSixthSegment.style.display = 'none';
        //  seventh
            let seventhHeaderButton = document.getElementById('seventhHeaderButton');
            seventhHeaderButton.style.display = 'none';
            let theSeventhSegment = document.getElementById('theSeventhSegment');
            theSeventhSegment.style.display = 'none';
        // eigth ...
    let eighthHeaderButton = document.getElementById('eighthHeaderButton');
    eighthHeaderButton.style.display = 'none';
    let theEighthSegment = document.getElementById('theEighthSegment');
    theEighthSegment.style.display = 'none';
        // ninth ...
    let ninthHeaderButton = document.getElementById('ninthHeaderButton');
    ninthHeaderButton.style.display = 'none';
    let theNinthSegment = document.getElementById('theNinthSegment');
    theNinthSegment.style.display = 'none';
        // tenth ...
    let tenthHeaderButton = document.getElementById('tenthHeaderButton');
    tenthHeaderButton.style.display = 'none';
    let theTenthSegment = document.getElementById('theTenthSegment');
    theTenthSegment.style.display = 'none';
    }, 10);
    hideTheseThingsOnPageLoad;
        // : SHOW THESE THINGS AFTER X AMOUNT OF SECONDS
    setTimeout( function() {
        firstDiv.style.display = 'block';
        secondDiv.style.display = 'block';
        setTimeout(function(){  // STEP 1
            secondDiv.style.display = 'none';
            thirdDiv.style.display = 'block';
        // : SHOW THESE THINGS AFTER X AMOUNT OF SECONDS
            setTimeout(function(){ // STEP 2
                fourthDiv.style.display = 'block';
                setTimeout(function() { // STEP 3
                    // start button should show div05
                    button01.style.display = 'block';
                }, 1000 ); // step 3 ( 2.5 seconds later )
            }, 1000 ); // step 2 ( 1 second later )
        }, 1000 ); // step 1                                      } TODO : change times back to prev.
    }, 2000); // start the clock
    div11.style.display = 'block';                         // finally show the final div11,div12 elements
    function buttonClicked (elementName) {
        if (elementName == 'secondHeaderButton')
        {
            showSecondHeader = theSecondSegment.style.display = 'inline';
        // hide the button
            addSecondHeaderButton.style.display = 'none';
        // show third header option
            document.getElementById('thirdHeaderButton').style.display = 'inline';
            document.getElementById('extension1ButtonHelp').style.display = 'none';
        }
        if ( elementName == 'thirdHeaderButton')
        {
            document.getElementById('thirdHeaderButton').style.display = 'none';
            document.getElementById('theThirdSegment').style.display = 'inline';
        //  show the fourth header button option.
            fourthHeaderButton.style.display = 'inline';
        }
        if ( elementName == 'fourthHeaderButton' )
        {
        // hide the button before moving on
            fourthHeaderButton.style.display = 'none';
        // show this segment
            theFourthSegment.style.display = 'inline';
        // show fifthHeaderButton
            fifthHeaderButton.style.display = 'inline';
        }
        if( elementName == 'fifthHeaderButton')
        {
            fifthHeaderButton.style.display = 'none';
            theFifthSegment.style.display   = 'inline';
            sixthHeaderButton.style.display = 'inline';
        }
        if ( elementName == 'sixthHeaderButton')
        {
            sixthHeaderButton.style.display   = 'none';
            theSixthSegment.style.display     = 'inline';
            seventhHeaderButton.style.display = 'inline';
        }
        if ( elementName == 'seventhHeaderButton')
        {
            seventhHeaderButton.style.display   = 'none';
            theSeventhSegment.style.display   = 'inline';
            eighthHeaderButton.style.display  = 'inline';
        }
        if ( elementName == 'eighthHeaderButton')
        {
            eighthHeaderButton.style.display   = 'none';
            theEighthSegment.style.display     = 'inline';
            ninthHeaderButton.style.display    = 'inline';
        }
        if ( elementName == 'ninthHeaderButton')
        {
            ninthHeaderButton.style.display = 'none';
            theNinthSegment.style.display   = 'inline';
            tenthHeaderButton.style.display = 'inline';
        }
        if ( elementName == 'tenthHeaderButton')
        {
            tenthHeaderButton.style.display   = 'none';
            theTenthSegment.style.display     = 'inline';
        }
        if (elementName == 'showCreateOrReturn') {
            document.getElementById('createOrReturn').style.display = 'inline';
        }
        // : These are the first few buttons clicked
        if (elementName == 'button01') {
            fifthDiv.style.display     = 'block';
            button01.style.display  = 'none';
            fourthDiv.style.display     = 'none';
        }
        if (elementName == 'button02') {
            fifthDiv.style.display = 'none';
            setTimeout(function() {
                div11.style.display = 'block';
            }, 1000 );
        // TODO : SHOW TITLE BUTTON NOW
        }
        // }
    }
    let formElements = [];
    function addToFormElements(elementName, placeHolder, fieldInputType) {
        formElements.push(elementName);
        createChosenElements(formElements, placeHolder, fieldInputType);
    }
    function createChosenElements(formElements, placeHolder, fieldInputType) {
        // TODO : use this later potentially to change out paragraphs
        let paragraph = ' ... Enter Paragraph ... ';
        let input = document.createElement('input');
        //  : CHANGING THE WAY PLACE HOLDER STRING APPEARS TO USER
        if (placeHolder.includes('headingeaderParagraph')) {
            switch (placeHolder) {
                case placeHolder = 'firstHeaderParagraph1':
                    input.placeholder = paragraph;
                    break;
                case placeHolder = 'firstHeaderParagraph2':
                    input.placeholder = paragraph;
                    break;
                case placeHolder = 'secondHeaderParagraph1':
                        console.log('paragraph 1 header 2');
                    input.placeholder = paragraph;
                    break;
                case placeHolder = 'secondHeaderParagraph2':
                    input.placeholder = paragraph;
                    break;
                case placeHolder = 'thirdHeaderParagraph1':
                    input.placeholder = paragraph;
                    break;
                case placeHolder = 'thirdHeaderParagraph2':
                        input.placeholder = paragraph;
                break;
        //  : IN THIS CASE WE SHOULD SEND ERROR TO SOME LOG
                default:
                    console.log('This should not happen.');
            }
        } else {
        //  : IF THERES NO NEED FOR STRING MODIFICATION
            input.placeholder = placeHolder;
        }
        //  : FINISH SETTING UP THE INPUT BEFORE APPENDED.
        input.setAttribute('type', fieldInputType);
        input.setAttribute('class', 'form-control mt-3 mb-3');
        appendToForm(input);
    }
    function appendToForm(input){
        let workflowButtonsContainer = document.getElementById('workflow');
        workflowButtonsContainer.appendChild(input);
    }

        // PROGRESS BAR
    var opacity = 0;
    var intervalID = 0;
    window.onload = fadeIn;

    function fadeIn() {
        setInterval(show, 75);
    }

    function show() {
        var body = document.getElementById("body");
        opacity = Number(window.getComputedStyle(body)
                            .getPropertyValue("opacity"));
        if (opacity < 1) {
            opacity = opacity + 0.1;
            body.style.opacity = opacity
        } else {
            clearInterval(intervalID);
        }
    }


    // When the user scrolls the page, execute myFunction
    window.onscroll = function() { progressTheBar()};

    function progressTheBar() {
       var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
       var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
       var scrolled = (winScroll / height) * 100;
       document.getElementById("myBar").style.width = scrolled + "%";
    }
