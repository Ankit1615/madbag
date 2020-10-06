<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="stylesheet" href="main.css">  
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">    
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--cdn for animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@500&family=Playfair+Display&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>

html {
  scroll-behavior: smooth;
}
.colap ul li .collapsible-header{
    background-color: #273c75;
    color:white;
    font-family: 'Source Serif Pro', serif;
    font-size:16px;
}
.colap ul li .collapsible-body{
    background-color:white;
    font-family: 'Bitter', serif;
    letter-spacing:0.5px;
    
}
#nav-profile{
  font-family: 'Bitter', serif;
}
        </style>
</head>
<body >
<nav >
            <div class="nav-wrapper"  style="background: linear-gradient(to right, #01074c, #1babd7);">
              <a href="index.php" class="brand-logo"><span style="color:blue;">Mad</span><span style="color:red;">Bag+<span></span></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger "><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li ><a href="index.php" style=" text-shadow: 4px 4px 6px #000000;color:white">Home</a></li>
                <li><a href="badges.html">service</a></li>
                <li><a href="faq.html">FAQ</a></li>                
                <li><a href="feedback.php">Feedback form</a></li>
                <li ><button style="background:#01074c;"><a href="login_hosp.php" style="color:white;">Login</a></button></li>
              </ul>
            </div>
          </nav>
      
         

        <?php
          include 'nav.php';
        ?>
         
 
    <div class="section pt-5 "style="background-image:url('./image/pattern.png');">
    <div class="container">
    <ul class="nav nav-tabs container" id="nav-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-weight: 600;">Accidents, first aid and treatments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-weight: 600;">Emergency Contact No.</a>                         
                        </li>
                        </ul>
                   
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active mt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                

    <div class="colap mt-5">
    <ul class="collapsible">
    <li class="active ">
      <div class="collapsible-header">Q. What are bruises?</div>
      <div class="collapsible-body" >  Bruises are patches that appear on the skin when tiny blood vessels called capillaries break or burst underneath. On fair skin the patches are usually bluish or purple coloured.
          
On darker skin the patches may be a dark purple, brownish or black coloured.
<br><br>
The blood from the capillaries leaks into the soft tissue under your skin, causing the discolouration.
<br>
Bruises often feel tender or swollen at first.
<h4 class="pb-2 pt-4">What causes bruising?</h4>
<p>Bruising is caused by internal bleeding under the skin that happens when a person has injured themselves.
<br>
Some people are naturally more likely to bruise than others.
<br><br> For example, older people may bruise easily because their skin is thinner and the tissue underneath is more fragile.</p>
<h4 class="pb-2 pt-4">How can I reduce bruising?</h4>
<p>
Treat bruises on your skin by limiting the bleeding. You can do this by cooling the area with a cold compress (a flannel or cloth soaked in cold water) or an ice pack wrapped in a towel.
<br><br>
To make an ice pack, place ice cubes or a packet of frozen vegetables in a plastic bag then wrap it in a towel. Hold this over the area for at least 10 minutes. Do not put the ice pack straight on to your skin as this will be too cold and could hurt.
<br><br>
Over-the-counter painkillers such as paracetamol or ibuprofen may help relieve the pain associated with bruising.
</p>
<h4 class="pb-2 pt-4">When to see a GP</h4>
<p>Most bruises will disappear after around 2 weeks. If the bruise is still there after 2 weeks, see a GP.
<br><br>
You should also see a GP if you suddenly get lots of bruises or start to bruise for no obvious reason. Unusual bruising is sometimes a symptom of an underlying illness, such as a problem with the way your blood clots.</p>
<h4 class="pb-2 pt-4">Internal bruising</h4>
<p>Bruises do not just happen under the skin – they can also happen deeper in your tissues, organs and bones. While the bleeding is not visible, internal bruising can cause:
<br>
</p>
<ol type = "circle">
 <li> pain and tenderness in the area of your body that was injured</li>
<li> limited range of movement in nearby joints</p></li>
</ol>
</div>

    </li>
    <li >
      <div class="collapsible-header">Q. How do I clean a wound?</div>
      <div class="collapsible-body">
          <p>It's important to clean a wound before applying a plaster or dressing. This will reduce the risk of infection and encourage the healing process.
<br><br>
A plaster or larger dressing is usually all that is needed to stop a wound bleeding. However, you might need to apply pressure to the area, and if an arm or leg is affected, you should raise it above heart level if possible.
<br><br>
Follow these steps:</p>
        <ol>
        <li>wash and dry your hands thoroughly</li>
       <li> wear disposable gloves if available </li>
        <li>if treating someone else, tell them what you're doing and make sure they're sitting or lying down</li>
        <li>don't try to remove anything embedded in the wound – seek medical advice (see below)</li>
        <li>rinse the wound under running tap water for 5 to 10 minutes</li>
        <li>soak a gauze pad or cloth in saline solution or tap water, or use an alcohol-free wipe, 
        <br>    
        and gently dab or wipe the skin with it – don't use antiseptic as this may damage the skin.</li>
        <li>gently pat the area dry using a clean towel or pad of tissues, but nothing fluffy <br> such as a cotton wool ball – strands of material can get stuck to the wound</li>
        <li> apply a sterile dressing, such as non-adhesive pad with a bandage, or a plaster – use a waterproof dressing if available</li>
        <li>if blood soaks through the dressing, leave it in place and add another dressing, and continue to apply pressure on the wound</li>
        </ol>
        
      </div>
    </li>
    <li>
      <div class="collapsible-header">Q. What should I keep in my first aid kit?</div>
      <div class="collapsible-body">
          <p>It's important to have a well-stocked first aid kit in your home so you can deal with minor accidents and injuries.
<br><br>
Your first aid kit should be locked and kept in a cool, dry place out of the reach of children.
<br>
Many people also keep a small first aid kit in their car for emergencies.</p>
<h4 class="pb-2 pt-4">Your basic first aid kit</h4>
<p>A basic first aid kit may contain:
<ol>
<li>plasters in a variety of different sizes and shapes</li>
<li>small, medium and large sterile gauze dressings</li>
<li>at least 2 sterile eye dressings</li>
<li>triangular bandages</li>
<li>crêpe rolled bandages</li>
<li>safety pins</li>
<li>disposable sterile gloves</li>
<li>tweezers</li>
<li>scissors</li>
<li>alcohol-free cleansing wipes</li>
<li>sticky tape</li>
<li>thermometer (preferably digital)</li>
<li>skin rash cream, such as hydrocortisone or calendula</li>
<li>cream or spray to relieve insect bites and stings</li>
<li>antiseptic cream</li>
<li>painkillers such as paracetamol (or infant paracetamol for children), aspirin (not to be given to children under 16), or ibuprofen</li>
<li>cough medicine</li>
<li>antihistamine cream or tablets</li>
<li>distilled water for cleaning wounds</li>
<li>eye wash and eye bath</li>
</ol>
<br>
It may also be useful to keep a basic first aid manual or instruction booklet with your first aid kit.
<br>
Medicines should be checked regularly to make sure they're within their use-by dates.</p>
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I apply plasters and other dressings?</div>
      <div class="collapsible-body">
          <p>Wash and dry your hands before applying any dressing, and wear disposable surgical gloves if you have them.
<br>
Also:</p>
<ol>
    <li>sit or lie down, or get the person who's bleeding to do this</li>
    <li>if you're helping someone else, tell them what you're doing as you apply the dressing</li>
    <li>stop any bleeding by applying pressure and raising the affected leg or arm higher than the heart</li>
    <li>use a dressing that's slightly bigger than the wound you want it to cover</li>
    <li>hold the dressing at the edges, keeping your fingers away from the part that's going to cover the wound</li>
   
</ol>
<h4 class="pb-2 pt-4">Sterile dressing pads attached to bandages</h4>
<p>Sterile (hygienic) dressing pads come in a protective wrapping. Once out of the wrapping, they're no longer sterile.
<br>
When applying one:
<ol>
    <li>clean and dry the wound and surrounding skin</li>
    <li>hold the bandage on either side of the pad</li>
    <li>lay the pad directly on the wound</li>
    <li>wind the short end once around the limb and the pad</li>
    <li>wind the other end around the limb to cover the whole pad</li>
    <li>tie the ends together over the pad to secure it, and put slight pressure on the wound</li>
</ol>

<h4 class="pb-2 pt-4">Dressings should be replaced on a regular basis</h4>
<p>If the wound is severe, you may need to go to a minor injuries unit after applying the dressing.
<br>
If you cannot stop the bleeding, go to your nearest accident and emergency (A&E) department as soon as possible.</p>
<h4 class="pb-2 pt-4">Plasters (adhesive dressings)</h4>
<p>Plasters are made from a piece of gauze and have a sticky (adhesive) backing. They're usually wrapped in single sterile packs.
<br>
They sometimes come in different shapes and sizes, or you can cut them to size. Some plasters are waterproof.
<br>
When applying one:</p>
<ol>
    <li>clean and dry the wound and surrounding skin</li>
    <li>unwrap the plaster and hold it by the protective strips with the pad side facing down</li>
    <li>peel back the strips, but do not remove them</li>
    <li>place the pad on the wound, pull away the strips, and press the edges of the plaster down</li>

</ol>
<br>
<p>
Plasters should be replaced every time they get dirty or wet, or if the blood soaks through.
<br>
A small number of people are allergic to the adhesive strips – ask them if this is the case before applying a plaster.
</p>
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I apply a bandage?</div>
      <div class="collapsible-body"><span>The key points when applying a bandage are:</span>
      <br>
      <br>
    <ol>
        <li>make sure the person is comfortable and tell them what you're doing
</li>
        <li>work from the side of the injury so you do not have to lean across their body
</li>
        <li>keep the injured part of the body supported in the position it'll be in when the bandage is on</li>
        <li>use the right size bandage – different parts of the body need different widths of bandage
</li>
        <li>avoid covering fingers or toes when bandaging a limb so you can easily check the circulation</li>
        <li>apply the bandage firmly, but not tightly, and secure the end by folding it over and tying a knot in the end. You can also use a safety pin, tape or a bandage clip
</li>
        <li>as soon as the bandage is on, ask if it feels too tight and check the circulation by pressing on a fingernail or a piece of skin until it turns pale.
            <br> If the colour does not return straight away, the bandage may be too tight, so you should loosen it. Limbs can swell up after an injury, 
            <br>
            so check the circulation every 10 minutes after you have put the bandage on.</li>
      
    </ol>
    <h4 class="pb-2 pt-4">Roller bandages</h4>
    <p>There are 3 types of roller bandage:</p>
  
    <ol>
        <li>bandages made of open-weave material – these allow ventilation, but do not put pressure on wounds and do not support joints</li>
        <li>elasticated bandages – these mould to a person's body shape, and are used to secure dressings and support soft tissue injuries like sprains</li>
        <li>crepe bandages – these are used to give firm support to injured joints
</li>
</ol>
<br>
To apply a roller bandage:
<br>
<br>
<ol>
        <li>keep the rolled part of the bandage above the injury and the unrolled part below the injury
</li>
        <li>begin by wrapping twice around the injury to hold the end in place</li>
        <li>work up the limb, winding the bandage in spiralling turns, making sure that each new layer covers half of the previous one
</li>
        <li>finish by wrapping the bandage around once more and securing the end
</li>
        
    </ol>
    <p>
        <br>
    When applying bandages to elbows and knees to hold dressings in place or support sprains or strains, flex the joint slightly, apply the bandage in a figure of 8, and extend the bandage quite far on each side of the joint.
<br><br>
When applying bandages on hands to hold dressings in place or support sprains and strains, work from the inside of the wrist using diagonal turns across the back of the hand to the end of the little finger, leaving the thumb free.
    </p>
    <h4 class="pb-2 pt-4">Tubular bandages</h4>
    <p>
    Tubular bandages are used to hold dressings on fingers or toes, or support injured joints. They're made of seamless fabric tube.
<br><br>
You can get elasticated ones to place over joints such as the ankle. Ones made of tubular gauze can be placed over fingers or toes, but do not provide any pressure to stop bleeding.
<br><br>
Before placing a tubular bandage over an injury, you may need to cut it to a smaller size.
    </p>
    <h4 class="pb-2 pt-4">Tubular bandages</h4>
    <p>
    Triangular bandages can be used as large dressings, as slings to support a limb, or to secure a dressing in place.
<br><br>
If you're using a triangular bandage as a sling on an arm, you use it opened out.
<br><br>
You should:
    </p>
        <ol>
            <li>ask the person to hold their arm across their chest and support the arm while you work</li>
            <li>put the bandage under the arm and around the back of the neck</li>
            <li>put the other half of the bandage over the arm to meet at the shoulder and tie into a knot</li>
            <li>tuck the loose ends of the bandage in at the elbow, or use a pin</li>
        </ol>
        <br>
        <p>
        If you're using a triangular bandage to support a lower limb or large dressing, fold it in half horizontally so the point of the triangle touches the middle of the long edge.
        <br>
        <br> Then fold it in half again in the same direction to make a broad strip.
        </p>
    </div>
    </li>
    <li>
      <div class="collapsible-header">Q. Does my cut need stitches?</div>
      <div class="collapsible-body"><span>
A cut may need stitches (or other treatments) if:</span>
<br>
<br>
<ol>
    <li>the bleeding does not stop after 10 minutes of applying pressure</li>
    <li>the cut is long or deep</li>
    <li>something is embedded within the cut</li>
    <li>the cut occurred as a result of an animal or human bite, or was punctured by any other object that may cause infection</li>
    <li>the cut is on the mouth, face, hand or genitals
</li>
</ol>
<br>
<p>
If any of these apply, go to an urgent care centre or A&E as soon as possible.
<br>

<p>
You should also see a GP if you think the cut is not healing properly, or may be showing signs of infection. Common signs of infection include:
</p>

<ol>

<li>swelling</li>
<li>redness</li>
<li>pain</li>
<li>pus coming from the wound</li>
</ol>
</p>
<br>
<h4 class="pb-2 pt-4">Tubular bandages</h4>
<p>
Bleeding from small cuts and grazes can be controlled by applying pressure to the cut using a clean, non-fluffy pad (preferably a sterile dressing, if you have one).
<br><br>
You should also raise the injured body part above the level of the heart so the bleeding slows down and stops. If it's your hand or arm, raise it above your head; if it's a lower limb, lie down and raise it.
<br><br>
If you do not have a sterile dressing, use a hand, tea towel or T-shirt to slow down the bleeding.
<br><br>
Once you're sure the cut is clean and the bleeding has stopped, wrap a dressing around it and make sure it's secure. For more information about cleaning cuts and grazes, see How do I clean a wound?
<br>
<br>
The cut should heal by itself within a few days.
</p>
</div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I apply butterfly stitches?</div>
      <div class="collapsible-body"><span>Butterfly stitches are narrow adhesive strips that help to close the edges of a small wound and encourage the skin to heal. They are sold in pharmacies as skin-closure strips or "Steri-Strips".
<br><br>
They should not be used on areas where the skin moves a lot, such as joints, or on oily, moist or hairy areas.
<br><br>
You can use the strips if the wound is shallow, clean and uninfected, and you're sure nothing is embedded in it.
<br><br>
Do not use them if the wound is on the face, or was the result of an animal or human bite. These types of wound should be checked by a GP or the staff at your local walk-in centre. </span>
<br><br>
Make sure the skin around the wound is also clean and dry. It's not always necessary to use the full length of the strips – you can cut them to a more appropriate length. Leave about 3mm between each strip.
<h4 class="pb-2 pt-4">How to apply them</h4>
<p>To apply skin-closure strips:</p>
<ol>
<li>carefully line up the edges of the wound</li>
<li>push them together and, starting at the middle of the wound, apply the strips to hold the edges together</li>
<li>place half of the strip on one side of the wound, gently bring the other side of the wound towards it, and then pass the strip over</li>
<li>place strips alternately above and below the first strip – this helps to match up the edges and keeps the skin tension equal</li>
<li>to anchor the rows of strips in place, put two strips vertically across the rows – one on each side of the wound</li>
<p>
A protective dressing is not usually necessary. The strips are waterproof, so you should be able to take a shower 24 hours after applying them, but try to keep the wound and strips as dry as possible.
<br><br>
If the wound does not stop bleeding once the strips have been applied, this is a sign that butterfly stitches are not suitable. You should go to a minor injuries unit because another method of treating the wound may be required. 
<br><br>
If you do not have ready access to a minor injuries unit, walk-in centre or similar out-of-hours service, visit your nearest A&E department.
<br><br>
Instructions to remove the strips vary by type and location of the wound. Check the patient information leaflet that comes in the packet.
<br><br>
If the wound becomes swollen, red or more painful then it may have become infected. Seek advice from your GP surgery, or from staff at your local walk-in centre or minor injuries unit.
</p>
</ol>
</div>
    </li>
    <li >
      <div class="collapsible-header">Q. How should I care for my stitches?</div>
      <div class="collapsible-body"><span>If you have stitches, take care to:</span>
      <br><br>
      <ol>
      <li>keep them clean and dry</li>
      <li>watch out for any increase in redness, swelling or pain</li>     
      </ol>
      <p>
      This will reduce your risk of developing an infection, or catch it early.
<br><br>
A doctor or nurse should tell you how to care for your wound. If you are unsure what to do, ask your healthcare team for advice.
      </p>
      <h4 class="pb-2 pt-4">Protect your stitches</h4>
      <p>
      It's important not to scratch your stitches; even though they're strong, scratching may damage them.
<br><br>
You should avoid contact sports, such as football or hockey, to give your wound the best possible chance to heal.
<br><br>
You should not go swimming until your wound has healed and your stitches have been removed.
<br><br>
If your child has stitches, do not let them play with water, mud, sand and paint.
<br><br>
Playing with things like these could cause the wound area to get dirty or sore, or cause an infection.
<br><br>
Children may also be advised to avoid PE at school until their wound has healed.
      </p>
      <h4 class="pb-2 pt-4">Signs of infection</h4>
      <p>Watch out for any signs of infection near or around the stitches, such as:</p>
      <ol>
      <li>swelling</li>
      <li>increased redness around the wound</li>
      <li>pus or bleeding from the wound</li>
      <li>the wound feeling warm</li>
      <li>an unpleasant smell from the wound</li>
      <li>increasing pain</li>
      <li>a high temperature</li>
      <li>swollen glands</li>
      </ol>
      <h4 class="pb-2 pt-4">Removing stitches</h4>
      <p>You will be told if you need to return to a GP or a nurse to have your stitches removed. These are the usual time periods:</p>
      <ol>
      <li>stitches on your head – you'll need to return after 3 to 5 days</li>
      <li>stitches over joints, such as your knees or elbows – you'll need to return after 10 to 14 days</li>
      <li>stitches on other parts of your body – you'll need to return after 7 to 10 days</li>
      </ol>
      <br>
      Some stitches are designed to dissolve gradually and will disappear on their own.
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. Can I get my stitches wet in the bath or shower?</div>
      <div class="collapsible-body">
      <p>Try to keep your stitches dry for at least 48 hours after surgery.
      <br><br>
      A doctor or nurse will tell you when you can get your stitches wet or if they need to be kept dry. This may depend on what kind of wound and dressing you have.
      </p>
      <h4 class="pb-2 pt-4">When can I have a bath or shower after surgery?</h4>
      <p>
      After 48 hours, surgical wounds can get wet without increasing the risk of infection.
<br><br>
After this time, you can get your stitches wet briefly with a light spray (such as in the shower), but they should not be soaked (for example, in the bath).
<br><br>
Make sure you pat the area dry afterwards.
      </p>
      <h4 class="pb-2 pt-4">Dressings</h4>
      <p>
      If you have a dressing over your stitches, avoid getting it wet.
<br><br>
Some dressings are waterproof, so you could wet your dressing lightly – for example, with the spray from a shower. However, you should not submerge your dressing under water. If you're not sure whether your dressing is waterproof, avoid getting it wet.
<br><br>
Do not remove the dressing unless you're advised to do so by a healthcare professional.
      </p>
      <h4 class="pb-2 pt-4">Keeping stitches dry</h4>
      <p>
      If you have been advised to keep your stitches dry, you could:
      </p>
      <ol>
      <li>cover your stitches when you have a shower, with a waterproof dressing – you may be able to use a rubber glove or plastic bag if they will cover your wound</li>
      <li>have a wash standing in a bath tub, using a cloth to clean yourself and avoiding your stitches</li>           
      </ol>
      <p>
      Dab your stitches dry with a clean towel after washing, even if the wound area did not get wet, to ensure the area is completely dry.
<br><br>
If your stitches get wet accidentally, simply dry the area immediately with a clean towel and make sure all the moisture around the stitches is soaked up.
<br><br>
After you've had stitches, you should be given some aftercare advice and contact details in case you're worried or have any questions.
      </p>
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How long will my stitches (sutures) take to dissolve?</div>
      <div class="collapsible-body">
      <p>
      The time it takes for dissolvable or absorbable stitches to disappear can vary.
<br><br>
Most types should start to dissolve or fall out within a week or two, although it may be a few weeks before they disappear completely. Some may last for several months.
<br><br>
Ask your doctor about the type of stitches you have been given and how long they should take to dissolve.
<br><br>
If your wound has healed and your stitches are bothering you, you might want to consider making an appointment with a GP or practice nurse, who may be able to remove them, rather than waiting for them to dissolve completely.
      </p>
      
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I care for a wound treated with skin glue?</div>
      <div class="collapsible-body">
      <p>
      Skin glue is a special medical glue used to close wounds. It can be used on its own or with stitches or adhesive tape. It forms a protective waterproof covering over your wound.
      </p>
      <h4 class="pb-2 pt-4">When is skin glue used?</h4>
      <p>Skin glue is usually used for cuts or wounds that:</p>
      <ol>
      <li>are small or minor</li>
      <li>are up to 5cm long</li>
      <li>have straight edges that can be easily pulled together</li>
      </ol>
      <br>
      <p>Skin glue is often used to close wounds on:</p>
      <ol>
      <li>the face or head</li>
      <li>some parts of the arms and legs</li>
      <li>the trunk of the body (torso)</li>
      </ol>
      <p>Skin glue isn't suitable for wounds over joints, like your knees, groin or hands.</p>
      <h4 class="pb-2 pt-4">How long does skin glue stay on?</h4>
      <p>
      Skin glue is applied as a liquid or paste to the edges of the wound.
<br><br>
It takes only a few minutes to set.
<br><br>
The glue usually peels off in 5 to 7 days.
<br><br>
The scar should take about 6 months to fade.
      </p>
      <h4 class="pb-2 pt-4">How to care for a wound closed with skin glue</h4>
      <p>Your doctor or nurse will give you advice about caring for a wound closed with skin glue.
<br><br>
General advice:</p>
<ol>
<li>avoid touching the glue for 24 hours</li>
<li>try to keep the wound dry for the first 5 days</li>
<li>showers are preferable to baths to avoid soaking the wound</li>
<li>use a shower cap if the wound is on the head</li>
<li>pat the wound dry if it gets wet – don't rub it</li>
</ol>
<br>
<p>If the wound is on your head, you should be able to wash your hair after 5 days.
<br><br>
Things to avoid during the first 5 days:</p>
<ol>
<li>don't stick a plaster on the skin glue</li>
<li>don't put creams or lotions on the glue</li>
<li>don't wear clothing that could rub against the glue</li>
<li>don't pick at the glued area</li>
<li>don't brush hair around the glued area</li>
</ol>

<h4 class="pb-2 pt-4">When to get help</h4>
<p>Most wounds closed with skin glue heal normally.
<br><br>
You should seek medical attention if:</p>
<ol>
<li>your wound splits open or starts to bleed</li>
<li>you think your wound may be infected</li>
</ol>
<br>
<p>You might have an infection if:</p>
<ol>
<li>the wound becomes more red or swollen</li>
<li>the pain or soreness in your wound gets worse</li>
<li>pus or blood leaks from your wound</li>
<li>you have a temperature of 38C (100.4F) or over</li>
</ol>
<p>Contact your GP or practice nurse for advice.</p>

      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I take a temperature?</div>
      <div class="collapsible-body">
      <h4 class="pb-2 pt-2">Using a digital thermometer</h4>
      <p>
      One way to check your temperature is to use a digital thermometer. You can buy these from supermarkets and pharmacies.
<br><br>
To use a digital thermometer:
<br><br>
<ol>
<li>Clean the tip with cold water and soap, then rinse it.</li>
<li>Turn the thermometer on.</li>
<li>Put the tip under your tongue, towards the back of your mouth.</li>
<li>Close your lips around the thermometer.</li>
<li>Wait until it beeps or flashes.</li>
<li>Check the temperature on the display.</li>
</ol>
      </p>
      <br>
      <p>You can also use a digital thermometer in your armpit. Make sure you keep your arm tight against your body until the thermometer beeps or flashes.</p>
    
      <h4 class="pb-2 pt-4">Digital ear thermometers</h4>
      <p>If you use a digital ear thermometer, follow the instructions that come with it.
<br><br>
You usually need to gently pull your ear up and back before putting the thermometer in your ear. This helps you get a more accurate temperature.
</p>
<h4 class="pb-2 pt-4">Other thermometers</h4>
<p>
Do not use a glass thermometer or a forehead strip.
<br><br>
Glass thermometers can be dangerous and forehead strips are not accurate.
</p>
<h4 class="pb-2 pt-4">If you do not have a thermometer</h4>
<p>
You can often still tell if you have a high temperature even if you do not have a thermometer.
<br><br>
Touch your chest and back. If they feel hotter than usual, you may have a high temperature. You may also have other symptoms such as feeling shivery (chills).
<br><br>
Touching your forehead is not a very accurate way of checking your temperature.
</p>
<h4 class="pb-2 pt-4">What is a high temperature?</h4>
<p>
Normal body temperature is different for everyone and changes during the day.
<br><br>
A temperature of 38C or more is usually considered a high temperature (fever).
</p>
<h4 class="pb-2 pt-4">Important</h4>
<p>
It's not always easy to take a temperature accurately.
<br><br>
If you feel hot or shivery, you may have a high temperature even if a thermometer says your temperature is below 38C.
</p>
<h4 class="pb-2 pt-4">What should I do if I have a high temperature?</h4>
<p>
If you have a high temperature, it could be coronavirus.
<br><br>
To protect others, do not go to places like a GP surgery, pharmacy or hospital. Stay at home.
</p>
      </div>
    </li>
    <li >
      <div class="collapsible-header">Q. How do I check my pulse?</div>
      <div class="collapsible-body">
      <p>
      You can check your heart rate by taking your pulse and counting how many times your heart beats in a minute.
<br><br>
Your heart rate varies depending on what you're doing – for example, it will be slower if you're sleeping and faster if you're exercising.
<br><br>
To get your resting heart rate, you need to have been resting for at least 5 minutes before checking your pulse.
      </p>
      <h4 class="pb-2 pt-4">Finding your pulse</h4>
      <p>
      You can find your pulse in your wrist or neck.
<br><br>
To find your pulse in your wrist:
      </p>
      <ol>
<li>hold out one of your hands, with your palm facing upwards  </li>
<li>press the first (index) finger and middle finger of your other hand on the inside of your wrist, at the base of your thumb – don't use your thumb as it has its own pulse .</li>
<li>press your skin lightly until you can feel your pulse – if you can't find it, try pressing a little harder or move your fingers around.</li>
</ol>
To find your pulse in your neck:
<br>
<ol>
<li>press your first finger and middle finger to the side of your neck, just under your jaw and beside your windpipe – don't use your thumb .</li>
<li>press your skin lightly to feel your pulse – if you can't find it, try pressing a bit harder or move your fingers around.</li>
</ol>
<h4 class="pb-2 pt-4">Checking your pulse</h4>
<p>
When you find your pulse, either:
</p>
<ol>
<li>count the number of beats you feel for 60 seconds.</li>
<li>count the number for 30 seconds and multiply by 2.</li>
</ol>
<br>
<p>
This gives you your heart rate – the number of times your heart beats per minute (bpm).
<br><br>
You can also check if your pulse is regular or irregular by feeling its rhythm for about 30 seconds. It's very common to have occasional irregular heartbeats, such as missed beats.
<br><br>
But if your pulse continues to be irregular, it can be a sign of atrial fibrillation – an irregular and often abnormally fast heart rate. This is more likely if you're 65 or older.
<br><br>
See a GP if you're worried about your pulse.
</p>
<h4 class="pb-2 pt-4">What's a normal heart rate?</h4>
<p>
Most adults have a resting heart rate between 60 and 100bpm.
<br><br>
The fitter you are, the lower your resting heart rate is likely to be. For example, athletes may have a resting heart rate of 40 to 60bpm, or lower.
<br><br>
See a GP to get checked if you think your heart rate is continuously above 120bpm or below 40bpm, although it may simply be that this is normal for you.
</p>
<h4 class="pb-2 pt-4">Exercise and your pulse</h4>
<p>
If you check your pulse during or immediately after exercise, it may give an indication of your fitness level. A heart rate monitor is also useful for recording your heart rate when resting and during exercise.
<br><br>
Aerobic activities such as walking, running and swimming are good types of exercise because they increase your heart and breathing rates.
</p>

<p>
If you haven't exercised before, or haven't for some time than read about benifits of exercise.
</p>

      </div>
    </li>
    
  </ul>
</div>
</div>
<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
  <table class="mt-4 mb-5">
<tr style="font-family: 'Source Serif Pro', serif;font-weight:600;font-size:17px;">
  <th>Emergency helpline</th>
  <th>Emergency helpline Number</th>
</tr>
<tr>
  <td>Fire Control Room</td>
  <td>101</td>
</tr>
<tr>
  <td>Ambulance Helpline</td>
  <td>102</td>
</tr>
<tr>
  <td>Centralised Accident & Trauma Services (CATS)</td>
  <td>1099</td>
</tr>
<tr>
  <td>Ambulance Helpline, Delhi</td>
  <td>1092</td>
</tr>
<tr>
  <td>Women's Helpline</td>
  <td>1091</td>
</tr>
<tr>
  <td>Women's Helpline Anywhere in India</td>
  <td>181</td>
</tr>
<tr>
  <td>Senior Citizen Helpline</td>
  <td>1091,1291</td>
</tr>
<tr>
  <td>Anti-Obscene Calls Cell</td>
  <td>1091</td>
</tr>
<tr>
  <td>Anti-Stalking Cell</td>
  <td>1091</td>
</tr>

<tr>
  <td>AIDS Helpline (India)</td>
  <td>1097</td>
</tr>
<tr>
  <td>Medical Helpline State (Andhra Pradesh, Gujarat, Uttarakhand, Goa, Tamil Nadu, Rajasthan, Karnataka, Assam, Meghalaya, Madhya Pradesh and Uttar Pradesh)</td>
  <td>108</td>
</tr>
<tr>
  <td>Anti-Poison</td>
  <td>1066</td>
</tr>
<tr>
  <td>Fire Control Room</td>
  <td>101</td>
</tr>
<tr>
  <td>Indian Red Cross Society</td>
  <td>011- 23711551</td>
</tr>
<tr>
  <td>Directory Enquiry</td>
  <td>197</td>
</tr>
<tr>
  <td>CGHS Helpline, Directorate General of Health Services</td>
  <td>155224</td>
</tr>
<tr>
  <td>Disaster Management of Govt. of NCT of Delhi</td>
  <td>1077</td>
</tr>
<tr>
  <td>Dy. Commissioner of Police (Missing Children and Women)</td>
  <td>1094</td>
</tr>
<tr>
  <td>Traffic Police Helpline</td>
  <td>1095</td>
</tr>
<tr>
  <td>Delhi Police Helpline</td>
  <td>1090</td>
</tr>
<tr>
  <td>Helpline of NDMC Control Room</td>
  <td>1267</td>
</tr>
<tr>
  <td>Ambulance Service</td>
  <td>1066</td>
</tr>
<tr>
  <td>Helpline for Women</td>
  <td>1092</td>
</tr>
<tr>
  <td>ORBO C.N.Centre, AIIMS ( for donation of organs)</td>
  <td>1060</td>
</tr>
  </table>
</div>
</div>
</div>
    </div>
    <?php include 'footer.php';?>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
  
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
     

</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
    <script src="main.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>