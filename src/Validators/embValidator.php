

    <?php

    namespace emb\Validators;

    use Plenty\Validation\Validator;

    /**
     *  Validator Class
     */
    class embValidator extends Validator
    {
        protected function defineAttributes()
        {
            $this->addString('E-Mail Adresse', true);
        }
    }
