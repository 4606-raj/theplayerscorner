<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerConsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_consents', function (Blueprint $table) {
            $table->id();
            $table->boolean('participate_in_football')->comment('consent for my child to participate in football related activities provided by representatives of Southall Athletic Football Club. This may include (but is not limited to) 1-2-1 and small group coaching sessions, competitive matches, tournaments, leagues etc.');
            $table->boolean('FA_code_of_conduct')->comment("I have read and understand the FA's RESPECT Code of Conduct & other policies related to Child Safeguarding and Protection. I understand that these policies must be adhered to by both the player and parent/guardian.");
            $table->boolean('photo_video_usage')->comment("I consent to my child’s photograph/videos to be used to publicise the club. I understand that in accordance with FA recommendations that at no time will my child be named. These photographs/videos may be posted on the Southall Athletic Football Club website and/or social media platforms or any other associated literature, websites, handbooks, or anything Southall Athletic Football Club deems appropriate. Please be advised that we use various technological equipment and software to record and analyse performance. If you would like access to this then we would require your consent here.");
            $table->boolean('travel')->comment("I consent to my child (U13 and above only) travelling to and from training sessions/matches/tournaments etc. on their own and it is not the responsibility of Southall Athletic Football Club to ensure their safe journey.");
            $table->boolean('fee')->comment("I hereby agree to pay all fees, as determined by Southall Athletic Football Club and I understand that if payment is not made in full, within an acceptable period of time, then Southall Athletic Football Club reserves the right to withhold my child from taking part in training sessions/matches/tournaments etc. This may also include revoking access to material/software that may have been provided.");
            $table->boolean('fee_non_refundable')->comment("I understand that the signing-on fee paid to Southall Athletic Football Club at the start of the season is NON-REFUNDABLE, as this includes payment towards kits, league registration and admin fees.");
            $table->boolean('equipment')->comment("Any football equipment provided will remain the property of Southall Athletic Football Club and as parent/guardian of the player, I hereby agree to return all football equipment when the club asks for it to be returned or when the player leaves Southall Athletic Football Club.");
            $table->boolean('guardian_information_for_events')->comment("I hereby give my express permission for our (player and parent/guardian(s)) details to be held and used by Southall Athletic Football Club to contact me only in relation to events connected with my child, the team, the club, the league(s) and The FA.");
            $table->boolean('guardian_information_for_marketing')->comment("Southall Athletic Football Club may use any of our (player and parent/guardian(s)) information provided for marketing purposes, but I understand it will not be sold to any third parties for this purpose.");
            $table->boolean('no_liability_rest')->comment("I accept that no liability will rest with Southall Athletic Football Club or its representatives whilst the player is engaged in football related activities. This may include (but is not limited to) 1-2-1 and small group coaching sessions, competitive matches, tournaments, leagues etc.");
            $table->boolean('no_personal_remarks_on_southall')->comment(" I agree that at no point will the player nor the parent/guardian(s) resort to making any personal remarks aimed at Southall Athletic Football Club or any of its representatives either on social media or by text/email. Southall Athletic Football Club will reserve the right to cancel the player's registration should this become an issue. If any fees have been paid for in advance, then this will be forfeited.");
            $table->boolean('symtom_free')->comment("It is your responsibility as a parent/guardian to ensure your child is symptom free before they attend any football related activities provided by Southall Athletic Football Club and that you will follow the FA guidelines https://www.thefa.com/-/media/thefacom-");
            $table->boolean('term_and_conditions_of_southall')->comment("I, the parent/guardian can confirm on behalf of the player that by completing and submitting this registration form we accept the terms and conditions of Southall Athletic Football Club.");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_consents');
    }
}
