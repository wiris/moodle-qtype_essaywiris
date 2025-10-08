<?php
/**
 * @When I choose the question type :questiontype
 */
public function iChooseTheQuestionType($questiontype)
{
    $this->execute('behat_forms::i_set_the_field_to', ['qtype', $questiontype]);
}

/**
 * @When I open Wiris Quizzes Studio
 */
public function iOpenWirisQuizzesStudio()
{
    // Click on the Wiris Studio button/link
    $this->execute('behat_general::i_click_on', ['Open Wiris Studio', 'button']);
    // Wait for the studio to load
    $this->execute('behat_general::i_wait_until_the_page_is_ready');
}

/**
 * @When I go back in Wiris Quizzes Studio
 */
public function iGoBackInWirisQuizzesStudio()
{
    // Click back button in Wiris Studio
    $this->execute('behat_general::i_click_on', ['Back', 'button']);
}

/**
 * @When I save Wiris Quizzes Studio
 */
public function iSaveWirisQuizzesStudio()
{
    // Click save button in Wiris Studio
    $this->execute('behat_general::i_click_on', ['Save', 'button']);
    // Wait for save to complete
    $this->execute('behat_general::i_wait_until_the_page_is_ready');
}