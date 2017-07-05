using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Mensagens : MonoBehaviour {

	public static bool gameOver;	
	public Text txtFimDeJogo;
	public Text txtJogarNovamente;
	public Text txtpontos;
	public static int pontos;
	// Use this for initialization
	void Start()
	{

		gameOver = false;
		pontos = 0;
	}

	// Update is called once per frame
	void Update()
	{

		txtpontos.text = "Pontos:  " + pontos;

		if (gameOver == true)
		{
			txtFimDeJogo.text = "Fim de Jogo";
			txtJogarNovamente.text = "Pressione a tecla N para jogar novamente";
		}
	}
}
