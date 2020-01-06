<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js" defer></script>
    <script src="app.js" defer></script>
    <title>Application Form</title>
</head>
<body>
<form action="#" @submit="checkForm" id="app" method="post">
    <header>
        <h5 class="card-title">Application Form</h5>
        <div>Please fill the form and answer the questions below.</div>
        <div>
            <p v-if="errors.length">
                <b>Please correct the following error(s):</b>
            <ul>
                <li v-for="error in errors" class="alert alert-danger">{{ error }}</li>
            </ul>
        </div>
    </header>
    <div class="form-group">
        <label for="myName"></label>
        <input id="myName" v-model="name" type="text" class="form-control"
               placeholder="Name Surname">
    </div>
    <div class="form-group">
        <label for="myBirthday"></label>
        <input id="myBirthday" v-model="date" type="date" class="form-control"
               placeholder="Date of birth">
    </div>
    <div class="form-group">
        <label for="myEmail"></label>
        <input id="myEmail" v-model="email" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="myPhone"></label>
        <input id="myPhone" v-model="tel" type="tel" pattern="[0-9]{8}" class="form-control"
               placeholder="Phone number ">
    </div>
    <div class="form-group">
        <label for="myCodeExperience"></label>
        <textarea id="myCodeExperience" v-model="codeExperience" name="CodeExperience"
                  spellcheck="true" rows="5" cols="60"
                  tabindex="4"
                  placeholder="Do you have the previous experience in coding? If yes - please describe it in 2-3 sentences."></textarea>
    </div>
    <div class="form-group">
        <label for="myWhyToCode"></label>
        <textarea id="myWhyToCode" v-model="whyToCode" name="whyToCode" spellcheck="true" rows="5"
                  cols="60"
                  tabindex="4"
                  placeholder="Why do you want to learn to code? Please answer in 2-3 sentences."></textarea>
    </div>
    <div>
        <fieldset>
            <legend id="title6" class="small">
                In a darkroom and you have one match left, which do you light first, the newspaper,
                the candle or the lamp?
            </legend>
            <div>
                <input id="radioLogicQ1" name="LogicQ1" type="hidden" value="">
                <div>
                    <input id="Q1_0" name="LogicQ1" type="radio" value="First Option">
                    <label class="choice" for="Q1_0">The Newspaper</label>
                </div>
                <div>
                    <input id="Q1_1" name="LogicQ1" type="radio" value="Second Option">
                    <label class="choice" for="Q1_1">The Candle</label>
                </div>
                <div>
                    <input id="Q1_2" name="LogicQ1" type="radio" value="Third Option">
                    <label class="choice" for="Q1_2">The Lamp</label>
                </div>
                <div>
                    <input id="Q1_3" name="LogicQ1" type="radio" value="Fourth Option">
                    <label class="choice" for="Q1_3">The Match</label>
                </div>
        </fieldset>
    </div>
    <div>
        <fieldset>
            <legend id="title6" class="small">
                In the final stretch of a marathon, you quickly ran by the person who is in second
                place, what place are you in?
            </legend>
            <div>
                <input id="radioLogicQ2" name="LogicQ2" type="hidden" value="">
                <div>
                    <input id="Q2_0" name="LogicQ2" type="radio" value="First Option">
                    <label class="choice" for="Q2_0">1st</label>
                </div>
                <div>
                    <input id="Q2_1" name="LogicQ2" type="radio" value="Second Option">
                    <label class="choice" for="Q2_1">2nd</label>
                </div>
                <div>
                    <input id="Q2_2" name="LogicQ2" type="radio" value="Third Option">
                    <label class="choice" for="Q2_2">3rd</label>
                </div>
        </fieldset>
    </div>
    <div>
        <label class="small" id="quiz_1" for="quizQ1">
            Operator '&&' stands for?
        </label>
        <div>
            <select id="quizQ1" name="quizQ1" class="field select medium">
                <option value="Default" selected="selected" hidden="hidden">Choose here</option>
                <option value="First Option">IF</option>
                <option value="Second Option">MAYBE</option>
                <option value="Third Option">AND</option>
                <option value="Fourth Option">OR</option>
            </select>
        </div>
    </div>
    <div>
        <div>
            <button onclick="topFunction()" id="myBtn"><input id='submit' type='submit' name='submit' value='Submit'
                                       class='btn btn-outline-primary'/></button>
            <input id='reset' type='reset' name='reset' value='Reset'
                   class='btn btn-outline-danger'/>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
</html>

