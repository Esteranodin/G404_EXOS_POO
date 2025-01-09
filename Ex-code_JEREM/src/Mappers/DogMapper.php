<?php

class DogMapper {

    public function mapToObject(array $data): Dog {
        return new Dog(
            $data['id'],
            $data['age'],
            $data['race'],
            $data['poil'],
            $data['nom']
        );
    
    }
}