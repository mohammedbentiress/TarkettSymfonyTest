<?php

namespace App\Controller;

use App\Entity\ClassRoom;
use App\Entity\Student;
use App\Repository\ClassRoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassRoomController extends AbstractController
{
    /**
     * Display list of all classrooms
     *
     * @Route("/classroom", name="class_room")
     *
     * @param ClassRoomRepository $classRoomRepository
     * @return Response
     */
    public function index(ClassRoomRepository $classRoomRepository): Response
    {
        return $this->render('class_room/index.html.twig', [
            'classRooms' => $classRoomRepository->findAll(),
        ]);
    }

    /**
     * Display classroom details
     *
     * @Route("/classroom/{id}", name="classRoom_detail")
     *
     * @param ClassRoom $classRoom
     * @return Response
     */
    public function classRoomDetail(ClassRoom $classRoom):Response
    {
        return $this->render('class_room/index.html.twig', [
            'classRoom' => $classRoom,
        ]);
    }


}
