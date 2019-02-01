<?php

use yii\db\Migration;

class m181018_070730_foreign_keys extends Migration
{
    public function up()
    {

        $this->addForeignKey('fk_survey_answer_to_question', '{{%s_survey_answer}}', 'survey_answer_question_id', '{{%s_survey_question}}', 'survey_question_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_survey_question_to_survey', '{{%s_survey_question}}', 'survey_question_survey_id', '{{%s_survey}}', 'survey_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_survey_question_to_type', '{{%s_survey_question}}', 'survey_question_type', '{{%s_survey_type}}', 'survey_type_id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('fk_stat_to_survey', '{{%s_survey_stat}}', 'survey_stat_survey_id', '{{%s_survey}}', 'survey_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_survey_user_answer_answer', '{{%s_survey_user_answer}}', 'survey_user_answer_answer_id', '{{%s_survey_answer}}', 'survey_answer_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_survey_user_answer_question', '{{%s_survey_user_answer}}', 'survey_user_answer_question_id', '{{%s_survey_question}}', 'survey_question_id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_survey_user_answer_survey', '{{%s_survey_user_answer}}', 'survey_user_answer_survey_id', '{{%s_survey}}', 'survey_id', 'CASCADE', 'CASCADE');

        try {
            $this->addForeignKey('fk_survey_created_by', '{{%s_survey}}', 'survey_created_by', '{{%user}}', 'id', 'SET NULL', 'CASCADE');
            $this->addForeignKey('fk_stat_to_user', '{{%s_survey_stat}}', 'survey_stat_user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
            $this->addForeignKey('fk_survey_user_answer_user', '{{%s_survey_user_answer}}', 'survey_user_answer_user_id', '{{%user}}', 'id', 'SET NULL', 'SET NULL');
        } catch (\yii\db\Exception $e) {
        }

    }

    public function down()
    {

        $this->dropForeignKey('fk_survey_answer_to_question', '{{%s_survey_answer}}');
        $this->dropForeignKey('fk_survey_question_to_survey', '{{%s_survey_question}}');
        $this->dropForeignKey('fk_survey_question_to_type', '{{%s_survey_question}}');
        $this->dropForeignKey('fk_stat_to_survey', '{{%s_survey_stat}}');
        $this->dropForeignKey('fk_survey_user_answer_answer', '{{%s_survey_user_answer}}');
        $this->dropForeignKey('fk_survey_user_answer_question', '{{%s_survey_user_answer}}');
        $this->dropForeignKey('fk_survey_user_answer_survey', '{{%s_survey_user_answer}}');

        try {
            $this->dropForeignKey('fk_survey_created_by', '{{%s_survey}}');
            $this->dropForeignKey('fk_stat_to_user', '{{%s_survey_stat}}');
            $this->dropForeignKey('fk_survey_user_answer_user', '{{%s_survey_user_answer}}');
        } catch (\yii\db\Exception $e) {
        }
    }
}
